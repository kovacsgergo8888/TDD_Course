<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.10.
 * Time: 20:04
 */

namespace StackOverflowProvider\Test\Api;


use StackOverflowProvider\Api\Builder\BuilderFactory;
use StackOverflowProvider\Api\Builder\QuestionTypes;

class BuilderFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     */
    public function testGetBuilder($expected, $actual)
    {
        $builderFactory = new BuilderFactory();

        $this->assertInstanceOf($expected, $builderFactory->getBuilder($actual));
    }

    public function provider()
    {
        return [
            ['\StackOverflowProvider\Api\Builder\AnswersBuilder', QuestionTypes::ANSWERS],
            ['\StackOverflowProvider\Api\Builder\FeaturedBuilder', QuestionTypes::FEATURED],
        ];
    }

}
