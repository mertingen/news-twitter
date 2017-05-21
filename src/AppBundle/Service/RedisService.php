<?php
/**
 * Created by IntelliJ IDEA.
 * User: mert
 * Date: 5/19/17
 * Time: 1:12 AM
 */

namespace AppBundle\Service;


use Doctrine\Common\Cache\Cache;
use Symfony\Component\Cache\Adapter\RedisAdapter;

class RedisService
{
    private $redisConnection;

    /**
     * RedisService constructor.
     * @internal param Cache $cache
     */
    public function __construct()
    {
        $this->redisConnection = RedisAdapter::createConnection('redis://127.0.0.1:6379');
    }

    public function sub()
    {
        $this->redisConnection->subscribe(array('tweet'), 'exploit');
    }

    public function exploit($data)
    {
        print_r($data);
    }

}