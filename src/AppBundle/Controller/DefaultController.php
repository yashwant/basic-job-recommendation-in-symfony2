<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LinkedIn;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
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
     * @Route("/li_login", name="user_serverside_login")
     */
    public function loginServersideAction()
    {
        $li = new LinkedIn\LinkedIn(
                array(
            'api_key' => $this->container->getParameter('linkedin_key'),
            'api_secret' => $this->container->getParameter('linkedin_secret'),
            'callback_url' => $this->generateUrl('linkedin_callback', array(), true)
                )
        );
        $url = $li->getLoginUrl(
                array(
                    LinkedIn\LinkedIn::SCOPE_FULL_PROFILE,
                    LinkedIn\LinkedIn::SCOPE_EMAIL_ADDRESS,
                    LinkedIn\LinkedIn::SCOPE_NETWORK,
                    LinkedIn\LinkedIn::SCOPE_READ_WRITE_GROUPS
                )
        );
        return $this->redirect($url);
    }

    /**
     * @Route("/li_calback", name="linkedin_callback")
     */
    public function linkedinCallbackAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $li = new LinkedIn\LinkedIn(
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
            $info = $li->get('/people/~:(firstName,lastName,headline,pictureUrl,languages,skills,three-current-positions,three-past-positions,courses,educations,certifications,patents,publications,interests,id,recommendations-received,job-bookmarks,following,proposal-comments,summary,specialties,industry)');
//            $this->createUser($info, $token, $token_expires);
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('AppBundle:User')->addNew($info);
            if ($user) {
                $this->get('session')->set('user', $user->serialize());
            }
//            echo '<pre>';
//            var_dump($info);
//            exit();
            $this->get('session')->getFlashBag()->add('success_message', 'Authentication successfully done!!!');

            return $this->redirect($this->generateUrl('homepage'));
        } else {
            $this->get('session')->getFlashBag()->add('error_message', 'Oops Something went wrong. Linkedin Authentication failed. Please try again.');

            return $this->redirect($this->generateUrl('homepage'));
        }
    }

}
