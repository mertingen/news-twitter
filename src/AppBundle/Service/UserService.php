<?php
/**
 * Created by IntelliJ IDEA.
 * User: mert
 * Date: 5/18/17
 * Time: 4:30 PM
 */

namespace AppBundle\Service;


use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;

class UserService
{
    private $entityManager;

    /**
     * KeywordService constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    /**
     * @param User $user
     * @return null|object
     */
    public function get(User $user)
    {
        $userRepo = $this->entityManager->getRepository('AppBundle:User');
        return $userRepo->findOneBy(array('userId' => $user->getUserId()));
    }

}