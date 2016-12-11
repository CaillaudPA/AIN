<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Service\TwitterService;
use Endroid\Twitter\Twitter;

class TwitterController extends Controller
{

    /**
     * @Route("/get-list")
     *
     * Just for example
     */
    public function indexAction()
    {
        $consumerKey = $this->getParameter('twitter.consumer_key');
        $consumerSecret = $this->getParameter('twitter.consumer_secret');
        $accessToken = $this->getParameter('twitter.access_token');
        $accessTokenSecret = $this->getParameter('twitter.access_secret');

        $user = $this->getUser();
        $twitterID = $user->getTwitterID();


        $twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

        $response = $twitter->query('statuses/user_timeline', 'GET', 'json');

        return $this->render('AppBundle:Twitter:twitter_timeline.html.twig', array("tweets"=>$response));
    }

}
