<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.13.
 * Time: 16:34
 */

namespace StackOverflowProvider\Test\Provider;


use StackOverflowProvider\Api\Client\CurlClient;
use StackOverflowProvider\Provider\AnswersOfQuestion;

class AnswersOfQuestionTest extends \PHPUnit_Framework_TestCase
{

    private $fixture;

    private $stub;

    /** @var  AnswersOfQuestion */
    private $object;

    public function setUp()
    {
        $this->fixture = file_get_contents(__DIR__ . "/../fixtures/answers_40412736.json");
        $this->stub = $this->getMockBuilder(AnswersOfQuestion::class)->getMock();
        $this->stub->method("getJson")->willReturn($this->fixture);

        $this->object = new AnswersOfQuestion();
    }

    public function testGetJson()
    {
        $this->assertEquals($this->fixture, $this->stub->getJson());
    }

    public function testGetListOfUserIds()
    {
        $this->assertEquals(
            [4653379, 204479, 6768738],
            $this->object->getListOfUserIds($this->stub->getJson())
        );
    }
}
