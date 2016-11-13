<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.13.
 * Time: 12:16
 */

namespace StackOverflowProvider\Test\Provider;


use StackOverflowProvider\Provider\MostPopularQuestion;

class MostPopularQuestionTest extends \PHPUnit_Framework_TestCase
{

    public function testGetJson()
    {
        $stub = $this->getMockBuilder(MostPopularQuestion::class)->getMock();
        $stub->method("getJson")->willReturn("OK");

        $this->assertEquals("OK", $stub->getJson());
    }


}
