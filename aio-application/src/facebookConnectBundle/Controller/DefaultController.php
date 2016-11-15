<?php

namespace facebookConnectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/facebookConnect")
     */
    public function indexAction()
    {
        return $this->render('facebookConnectBundle:Default:index.html.twig');
    }
}
