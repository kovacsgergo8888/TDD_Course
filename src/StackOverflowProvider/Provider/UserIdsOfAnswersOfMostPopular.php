<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.14.
 * Time: 19:38
 */

namespace StackOverflowProvider\Provider;


class UserIdsOfAnswersOfMostPopular
{
    /**
     * @var AnswersOfQuestion
     */
    private $answersOfQuestion;

    /**
     * @var MostPopularQuestion;
     */
    private $mostPopular;

    /**
     * @var array
     */
    private $userIds;

    public function __construct()
    {
        $this->answersOfQuestion = new AnswersOfQuestion();
        $this->mostPopular = new MostPopularQuestion();

        $this->mostPopular->callApi();
        $questionId = $this->mostPopular->getQustionId($this->mostPopular->getJson());

        $this->answersOfQuestion->setIds([$questionId]);
        $this->answersOfQuestion->callApi();
        $this->userIds = $this->answersOfQuestion->getListOfUserIds($this->answersOfQuestion->getJson());
    }

    public function getUserIds()
    {
        return $this->userIds;
    }
}