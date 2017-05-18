<?php

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Created by IntelliJ IDEA.
 * User: mert
 * Date: 5/17/17
 * Time: 6:33 PM
 */
class SessionService
{
    private $session;

    /**
     * SessionService constructor.
     * @param Session $session
     * @internal param EntityManager $entityManager
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * @param $key
     * @return bool|mixed
     */
    public function get($key)
    {
        if (empty($key)) {
            return false;
        }
        $data = $this->session->get($key);
        return (!empty($data)) ? $data : false;
    }

    /**
     * @param $key
     * @param $data
     * @return bool
     */
    public function set($key, $data)
    {
        if (empty($key) || empty($data)) {
            return false;
        }
        $this->session->set($key, $data);
        return true;
    }

    /**
     * @param $key
     * @return bool
     */
    public function remove($key)
    {
        $this->session->remove($key);
        return true;
    }

}