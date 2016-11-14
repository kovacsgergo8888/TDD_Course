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

    private $fixture;

    private $stub;

    public function setUp()
    {
        $this->fixture = file_get_contents(__DIR__ . "/../fixtures/most_popular.json");
        $this->stub = $this->getMockBuilder(MostPopularQuestion::class)->getMock();
        $this->stub->method("getJson")->willReturn($this->fixture);
    }

    public function testGetJson()
    {
        $this->assertEquals($this->fixture, $this->stub->getJson());
    }

    public function testGetQuestionId()
    {
        $object = new MostPopularQuestion();
        $this->assertEquals('40342587', $object->getQustionId($this->stub->getJson()));
    }


}
