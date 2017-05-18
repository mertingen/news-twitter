<?php
/**
 * Created by IntelliJ IDEA.
 * User: mert
 * Date: 5/18/17
 * Time: 3:13 PM
 */

namespace AppBundle\Service;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;

class HttpService
{
    private $client;
    private $host;
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    public function generatePostData($host, $postData = NULL)
    {
        $results = false;
        $this->host = $host;
        try {
            $response = $this->client->post($this->host, array('json' => $postData));
            $results = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
        } catch (BadResponseException $e) {
            //echo $e->getMessage();
            return array();
        }
        return $results;
    }
    public function generateGetData($host, $getData = NULL)
    {
        $results = false;
        try {
            $response = $this->client->get($host, $getData);
            $results = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
        } catch (BadResponseException $e) {
            echo $e->getMessage();
        }
        return $results;
    }
}