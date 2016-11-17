<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FacebookAccount;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class FacebookController extends Controller
{
    /**
     * @Route("/facebookConnect")
     */
    public function indexAction()
    {



        return $this->render('AppBundle:Default:index.html.twig');
    }

    /**
     * @param $id
     * @Route("/addfacebookaccount/{id}", name="add_facebook_account")
     * @return Response
     */

    public function addFacebookAccout($id){


        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->find($this->getUser());

        $facebookaccount = new FacebookAccount();
        $facebookaccount->setId($id);
        $facebookaccount->setUser($user);

        $em->persist($facebookaccount);
        $em->flush();
        return new Response($id);
    }
}
