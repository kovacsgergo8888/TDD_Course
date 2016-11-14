<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.13.
 * Time: 20:54
 */


use StackOverflowProvider\Provider\UserIdsOfAnswersOfMostPopular;

require_once "../vendor/autoload.php";

$userIds = new UserIdsOfAnswersOfMostPopular();

echo '<pre>';
var_dump($userIds->getUserIds());
echo '<pre>';
die;