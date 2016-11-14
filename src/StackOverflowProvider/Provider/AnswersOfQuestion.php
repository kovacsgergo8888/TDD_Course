<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.13.
 * Time: 16:31
 * https://api.stackexchange.com/docs/answers-on-questions
 */

namespace StackOverflowProvider\Provider;


use StackOverflowProvider\Api\ApiFieldNames;
use StackOverflowProvider\Api\Builder\BuilderTypes;

class AnswersOfQuestion extends AbstractProvider
{
    /**
     * @var string
     */
    protected $builderType = BuilderTypes::ANSWERS;

    /**
     * @var array
     */
    protected $params = [
        ApiFieldNames::ORDER => ApiFieldNames::ORDEROPTION_DESC,
        ApiFieldNames::SORT => ApiFieldNames::SORTOPTION_ACTIVITY,
        ApiFieldNames::SITE => "stackoverflow",
    ];

    /**
     * @var array
     */
    protected $ids;

    /**
     * @param array $ids
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
    }

    /**
     * @return void
     */
    protected function setBuilder()
    {
        parent::setBuilder();
        $this->builder->setIds($this->ids);
    }

    /**
     * @param $json
     * @return array
     */
    public function getListOfUserIds($json)
    {
        $response = json_decode($json, true);
        $result = [];
        foreach ($response['items'] as $item) {
            if (!empty($userId = $item['owner']['user_id'])) {
                $result[] = $userId;
            }
        }
        return $result;
    }
}