<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.13.
 * Time: 20:54
 */

use StackOverflowProvider\Provider\AnswersOfQuestion;
use StackOverflowProvider\Provider\MostPopularQuestion;

require_once "../vendor/autoload.php";

$featuredProvider = new MostPopularQuestion();
$featuredProvider->callApi();
$mostPopular = json_decode($featuredProvider->getJson(), true);
$questionId = $mostPopular['items'][0]['question_id'];

$answersProvider = new AnswersOfQuestion();
$answersProvider->setIds([$questionId]);
$answersProvider->callApi();

$usersOfAnswers = json_decode($answersProvider->getJson(), true);

echo '<pre>';
var_dump($usersOfAnswers);
echo '<pre>';
die;