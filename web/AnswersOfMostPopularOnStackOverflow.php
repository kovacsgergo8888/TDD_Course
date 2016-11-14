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

echo "User IDs of answers of the most popular question on StackOverflow:<br>";
foreach ($userIds as $userId) {
    echo $userId . "<br>";
}