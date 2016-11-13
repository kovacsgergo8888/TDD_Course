<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.13.
 * Time: 16:31
 */

namespace StackOverflowProvider\Provider;


use StackOverflowProvider\Api\ApiFieldNames;
use StackOverflowProvider\Api\Builder\BuilderTypes;

class AnswersOfQuestion extends AbstractProvider
{
    protected $builderType = BuilderTypes::ANSWERS;

    protected $params = [
        ApiFieldNames::ORDER => ApiFieldNames::ORDEROPTION_DESC,
        ApiFieldNames::SORT => ApiFieldNames::SORTOPTION_ACTIVITY,
        ApiFieldNames::SITE => "stackoverflow",
    ];

    protected $ids;

    /**
     * @param mixed $ids
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
    }

    protected function setBuilder()
    {
        parent::setBuilder();
        $this->builder->setIds($this->ids);
    }
}