<?php
/**
 * Created by IntelliJ IDEA.
 * User: mert
 * Date: 5/17/17
 * Time: 4:41 PM
 */

namespace AppBundle\Controller;


use Abraham\TwitterOAuth\TwitterOAuth;
use Abraham\TwitterOAuth\TwitterOAuthException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class TwitterUserController extends Controller
{

    public function getSessionService()
    {
        return $this->get('session.service');
    }

    public function getKeywordService()
    {
        return $this->get('keyword.service');
    }

    public function getTwitterParameters()
    {
        return array(
            'callbackUrl' => $this->getParameter('callback_url'),
            'consumerKey' => $this->getParameter('consumer_key'),
            'consumerSecretKey' => $this->getParameter('consumer_secret_key')
        );
    }

    /**
     * @Route("/login", methods={"GET"}, name="twitter-login")
     */
    public function loginAction()
    {
        if ($this->getUser() !== NULL) {
            return $this->redirectToRoute('keyword-list');
        }

        $twitterParameters = $this->getTwitterParameters();
        $connection = new TwitterOAuth($twitterParameters['consumerKey'], $twitterParameters['consumerSecretKey']);
        $requestToken = $connection->oauth('oauth/request_token', array('oauth_callback' => $twitterParameters['callbackUrl']));
        $oauthToken = $requestToken['oauth_token'];
        $oauthSecretToken = $requestToken['oauth_token_secret'];

        $this->getSessionService()->remove('oauthToken');
        $this->getSessionService()->set('oauthToken', $oauthToken);
        $this->getSessionService()->set('oauthTokenSecret', $oauthSecretToken);

        $authUrl = $connection->url('oauth/authorize', array('oauth_token' => $requestToken['oauth_token']));

        return $this->render('AppBundle:user:login.html.twig', array('authUrl' => $authUrl));
    }

    /**
     * @Route("/checkLoginTwitter", name="check-login-twitter")
     */
    public function checkLoginAction(Request $request)
    {
        $oauthVerifier = $request->query->get('oauth_verifier');
        $oauthToken = $this->getSessionService()->get('oauthToken');
        $oauthTokenSecret = $this->getSessionService()->get('oauthTokenSecret');

        $consumerKey = $this->getParameter('consumer_key');
        $consumerKeySecret = $this->getParameter('consumer_secret_key');

        try {
            $authConnection = new TwitterOAuth($consumerKey, $consumerKeySecret, $oauthToken, $oauthTokenSecret);

            $accessData = $authConnection->oauth("oauth/access_token", ["oauth_verifier" => $oauthVerifier]);
            $this->getSessionService()->set('accessToken', $accessData);

            $connection = new TwitterOAuth($consumerKey, $consumerKeySecret, $accessData['oauth_token'], $accessData['oauth_token_secret']);


            $twitterUser = $connection->get("account/verify_credentials");
        } catch (TwitterOAuthException $e) {
            dump($e->getMessage());
            die;
        }

        $this->getSessionService()->set('twitterUser', $twitterUser);
        return $this->redirectToRoute('check-user');


    }
}