<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Service\TwitterService;

class TwitterController extends Controller
{

    /**
     * @Route("/")
     *
     * Just for example
     */
    public function indexAction()
    {
        // ...
    }

}
