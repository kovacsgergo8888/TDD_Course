<?php

/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.10.
 * Time: 22:07
 */

namespace StackOverflowProvider\Api\Client;

class CurlClient
{
    private $curl;

    private $options = [];

    private $response;

    private $info;

    private $error;

    public function __construct()
    {
        $this->curl = curl_init();
        $this->setOptions([
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT => 5,
        ]);
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = array_merge($this->options, $options);
    }

    public function execute()
    {
        foreach ($this->options as $key => $value) {
            curl_setopt($this->curl, $key, $value);
        }
        $this->response = curl_exec($this->curl);
        $this->info = curl_getinfo($this->curl);
        $this->error = curl_error($this->curl);
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }


}
