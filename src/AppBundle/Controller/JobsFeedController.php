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
        return $this->render('default/index.html.twig');
    }

}
