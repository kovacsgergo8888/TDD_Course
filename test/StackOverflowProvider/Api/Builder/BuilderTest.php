<?php
namespace StackOverflowProvider\Test\Api;

use StackOverflowProvider\Api\ApiFieldNames;
use StackOverflowProvider\Api\Builder\Builder;

class BuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testBuildUrl()
    {
        $apiBuilder = new Builder();

        $type = "Featured";
        $query = [
            ApiFieldNames::ORDER => ApiFieldNames::ORDEROPTION_DESC,
            ApiFieldNames::SORT => ApiFieldNames::SORTOPTION_ACTIVITY,
            ApiFieldNames::SITE => "stackoverflow",
        ];
        $url = $apiBuilder->build($type, $query);
        $this->assertEquals("https://api.stackexchange.com/2.2/questions/featured?order=desc&sort=activity&site=stackoverflow", $url);
    }

}
