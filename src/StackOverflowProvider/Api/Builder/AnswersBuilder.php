<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.10.
 * Time: 19:48
 */

namespace StackOverflowProvider\Api\Builder;


class AnswersBuilder extends Builder
{
    protected $apiUrlQuery = "questions/{ids}/answers";

    /**
     * @var array
     */
    protected $ids;

    /**
     * @return string
     */
    public function getApiUrlQuery()
    {
        return str_replace("{ids}", implode("%3B", $this->ids), $this->apiUrlQuery);
    }

    /**
     * @param array $ids
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
    }
}