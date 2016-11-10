<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.10.
 * Time: 20:29
 */

namespace StackOverflowProvider\Test\Api;


use StackOverflowProvider\Api\ApiFieldNames;
use StackOverflowProvider\Api\Builder\QuestionTypes;

class FeaturedBuilderTest extends BuilderTest
{
    protected $builderType = QuestionTypes::FEATURED;

    /**
     * @dataProvider provider
     * @param $expected
     * @param $actual
     */
    public function testBuild($expected, $actual)
    {
        $this->assertEquals($expected, $this->builder->build($actual));
    }

    public function provider()
    {
        return [
            [
                "https://api.stackexchange.com/2.2/questions/featured?order=desc&sort=activity&site=stackoverflow",
                [
                    ApiFieldNames::ORDER => ApiFieldNames::ORDEROPTION_DESC,
                    ApiFieldNames::SORT => ApiFieldNames::SORTOPTION_ACTIVITY,
                    ApiFieldNames::SITE => "stackoverflow",
                ]
            ],
        ];
    }
}
