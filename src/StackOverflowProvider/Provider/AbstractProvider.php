<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.13.
 * Time: 16:12
 */

namespace StackOverflowProvider\Provider;


use StackOverflowProvider\Api\Builder\Builder;
use StackOverflowProvider\Api\Builder\BuilderFactory;
use StackOverflowProvider\Api\Client\CurlClient;

abstract class AbstractProvider
{
    /** @var  Builder */
    protected $builder;

    protected $builderType;

    /** @var  array */
    protected $params;

    /** @var  CurlClient */
    protected $client;

    public function callApi()
    {
        $this->client = new CurlClient();
        $this->setBuilder();

        $this->client->addOptions([CURLOPT_URL => $this->builder->build($this->params)]);
        $this->client->execute();
    }

    protected function setBuilder()
    {
        $builderFactory = new BuilderFactory();
        $this->builder = $builderFactory->getBuilder($this->builderType);
    }

    public function getJson()
    {
        return $this->client->getResponse();
    }
}