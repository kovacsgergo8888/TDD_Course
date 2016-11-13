<?php

/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.10.
 * Time: 22:08
 */

namespace StackOverflowProvider\Test\Api\Client;



use StackOverflowProvider\Api\Client\CurlClient;

class CurlClientTest extends \PHPUnit_Framework_TestCase
{
    public function testGetResponse()
    {
        $stub = $this->getMockBuilder(CurlClient::class)->getMock();
        $stub->method("getResponse")->willReturn("OK");


        $this->assertEquals("OK", $stub->getResponse());
    }
}
