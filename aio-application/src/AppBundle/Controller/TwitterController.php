<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Service\TwitterService;
use Endroid\Twitter\Twitter;

class TwitterController extends Controller
{

    /**
     * @Route("/connect")
     *
     * Just for example
     */
    public function indexAction()
    {
        $consumerKey = $this->getParameter('twitter.consumer_key');
        $consumerSecret = $this->getParameter('twitter.consumer_secret');
        $accessToken = $this->getParameter('twitter.access_token');
        $accessTokenSecret = $this->getParameter('twitter.access_secret');

        $twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

        $response = $twitter->query('oauth/authenticate', 'GET', 'json', array(
            //"oauth_callback" => "http://127.0.0.1/aio/aio-application/web/app_dev.php/twitter_connect/callback"
        ));

        //$response = $twitter->query('statuses/user_timeline', 'GET', 'json');
        dump($response);die;
    }

}
