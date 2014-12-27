<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\LinkedIn\LinkedIn as LinkedinApi;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $user = $this->get('session')->get('user');
//        echo $this->get('session')->get('token'); exit();
        if ($user) {
            return $this->redirect($this->generateUrl('job_reco'));
        } else {
            return $this->render('default/index.html.twig');
        }
    }

    /**
     * @deprecated
     * @Route("/login", name="user_login")
     */
    public function loginAction()
    {
        return $this->render('default/login.html.twig');
    }

    /**
     * 
     * @Route("/logout", name="user_logout")
     */
    public function logoutAction()
    {

        $this->get('session')->set('token', null);
        $this->get('session')->set('token_expires', null);
        $this->get('session')->set('user', null);

        return $this->redirect($this->generateUrl('homepage'));
    }

    /**
     * @Route("/li_login", name="user_serverside_login")
     */
    public function loginServersideAction()
    {
        $li = new LinkedinApi(
                array(
            'api_key' => $this->container->getParameter('linkedin_key'),
            'api_secret' => $this->container->getParameter('linkedin_secret'),
            'callback_url' => $this->generateUrl('linkedin_callback', array(), true)
                )
        );
        $url = $li->getLoginUrl(
                array(
                    LinkedinApi::SCOPE_FULL_PROFILE,
                    LinkedinApi::SCOPE_EMAIL_ADDRESS,
                    LinkedinApi::SCOPE_NETWORK,
                    LinkedinApi::SCOPE_READ_WRITE_GROUPS
                )
        );
        return $this->redirect($url);
    }

    /**
     * @Route("/li_calback", name="linkedin_callback")
     */
    public function linkedinCallbackAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $li = new LinkedinApi(
                array(
            'api_key' => $this->container->getParameter('linkedin_key'),
            'api_secret' => $this->container->getParameter('linkedin_secret'),
            'callback_url' => $this->generateUrl('linkedin_callback', array(), true),
                )
        );

        $error = $request->get('error', null);
        $code = $request->get('code', null);
        if (!$error && $code) {
            $token = $li->getAccessToken($code);
            $token_expires = $li->getAccessTokenExpiration();
            $this->get('session')->set('token', $token);
            $this->get('session')->set('token_expires', $token_expires);
            $info = $li->get('/people/~:(firstName,lastName,headline,pictureUrl,languages,skills,three-current-positions,three-past-positions,courses,educations,certifications,patents,publications,interests,id,recommendations-received,job-bookmarks,following,proposal-comments,summary,specialties,industry,location:(name))');
            
//            echo '<pre>'; print_r($info['threeCurrentPositions']);
//            exit();
//            $this->createUser($info, $token, $token_expires);
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('AppBundle:User')->addNew($info);
            if ($user) {
                $this->get('session')->set('user', $user->serialize());
            }
            else
            {
                $this->get('session')->getFlashBag()->add('error_message', 'Oops Something went wrong. Please try again.');
                return $this->redirect($this->generateUrl('homepage'));
            }
            $groups = $li->get('/people/~/group-memberships:(group:(id,name,description))?membership-state=member&start=0&count=50');
            //echo '<pre>'; //,counts-by-category

            $em->getRepository('AppBundle:UserGroups')->add($groups, $user);
            if(array_key_exists('skills', $info))
            {
                $em->getRepository('AppBundle:Skill')->bulkAdd($info['skills'], $user);
            }
            if(array_key_exists('educations', $info))
            {
                $em->getRepository('AppBundle:UserEducations')->bulkAdd($info['educations'], $user);
            }
            
//            exit();
            $this->get('session')->getFlashBag()->add('success_message', 'Authentication successfully done!!!');

            return $this->redirect($this->generateUrl('homepage'));
        } else {
            $this->get('session')->getFlashBag()->add('error_message', 'Oops Something went wrong. Linkedin Authentication failed. Please try again.');

            return $this->redirect($this->generateUrl('homepage'));
        }
    }

}
