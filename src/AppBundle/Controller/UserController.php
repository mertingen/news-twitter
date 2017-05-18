<?php
/**
 * Created by IntelliJ IDEA.
 * User: mert
 * Date: 5/17/17
 * Time: 7:15 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class UserController extends Controller
{

    public function getEntityManager()
    {
        return $this->get('doctrine.orm.entity_manager');
    }

    public function getSessionService()
    {
        return $this->get('session.service');
    }

    /**
     * @Route("/checkUser", methods={"GET"}, name="check-user")
     */
    public function checkUserAction()
    {
        $twitterUser = $this->getSessionService()->get('twitterUser');
        if (empty($twitterUser)) {
            return $this->redirectToRoute('twitter-login');
        }

        $user = $this->get('security.user_provider')->loadUserByUsername($twitterUser->screen_name);

        if (empty($user)){
            $accessTokenData = $this->getSessionService()->get('accessToken');
            $user = new User();
            $user->setAccessToken($accessTokenData['oauth_token']);
            $user->setSecretAccessToken($accessTokenData['oauth_token_secret']);
            $user->setTwitterId($twitterUser->id);
            $user->setName($twitterUser->name);
            $user->setUsername($twitterUser->screen_name);
            $user->setUrl($twitterUser->url);
            $user->setCreatedAt(new \DateTime());
            $this->getEntityManager()->persist($user);
            $this->getEntityManager()->flush($user);
        }

        $user->setImage($twitterUser->profile_image_url);


        $this->get('security.token_storage')->setToken(
            new UsernamePasswordToken(
                $user, null, 'main', $user->getRoles())
        );

        return $this->redirectToRoute('keyword-list');


    }

}