<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.13.
 * Time: 16:34
 */

namespace StackOverflowProvider\Test\Provider;


use StackOverflowProvider\Provider\AnswersOfQuestion;

class AnswersOfQuestionTest extends \PHPUnit_Framework_TestCase
{
    public function testGetJson()
    {
        $stub = $this->getMockBuilder(AnswersOfQuestion::class)->getMock();
        $stub->method("getJson")->willReturn("OK");

        $this->assertEquals("OK", $stub->getJson());
    }
}
