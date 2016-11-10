<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.10.
 * Time: 21:24
 */

namespace StackOverflowProvider\Test\Api\Builder;


use StackOverflowProvider\Api\ApiFieldNames;
use StackOverflowProvider\Api\Builder\QuestionTypes;

class AnswersBuilderTest extends BuilderTest
{
    protected $builderType = QuestionTypes::ANSWERS;

    /**
     * @dataProvider provider
     */
    public function testBuild($expected, $actual, $ids)
    {
        $this->builder->setIds($ids);
        $this->assertEquals($expected, $this->builder->build($actual));
    }

    public function provider()
    {
        return [
            [
                "https://api.stackexchange.com/2.2/questions/234234%3B355522%3B355355/answers?order=desc&sort=activity&site=stackoverflow",
                [
                    ApiFieldNames::ORDER => ApiFieldNames::ORDEROPTION_DESC,
                    ApiFieldNames::SORT => ApiFieldNames::SORTOPTION_ACTIVITY,
                    ApiFieldNames::SITE => "stackoverflow",
                ],
                [
                    234234,
                    355522,
                    355355,
                ]
            ],
        ];
    }
}
