<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JobsFeedController extends Controller
{

    /**
     * @Route("/recommendation", name="job_reco")
     */
    public function indexAction()
    {
        $user = $this->get('session')->get('user');
        if (!$user) {
            return $this->redirect($this->generateUrl('homepage'));
        }
        $unserialisezUser = list (
                $this->id,
                $this->email,
                $this->lastLoginTime,
                $this->lastUpdatedOnTime,
                $this->signupOnTime,
                ) = unserialize($user);
        $em = $this->getDoctrine()->getManager();
        $userEntity = $em->getRepository('AppBundle:User')->find($unserialisezUser[0]);
        $recommendations = $em->getRepository('AppBundle:Job')->filterJobs($userEntity);
        return $this->render('jobsfeed/recommendations.html.twig', array('jobs' => $recommendations));
    }

}
