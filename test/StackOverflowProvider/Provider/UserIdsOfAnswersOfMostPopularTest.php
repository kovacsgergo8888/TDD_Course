<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.14.
 * Time: 19:38
 */

namespace StackOverflowProvider\Test\Provider;


use StackOverflowProvider\Provider\UserIdsOfAnswersOfMostPopular;

class UserIdsOfAnswersOfMostPopularTest extends \PHPUnit_Framework_TestCase
{
    private $object;

    public function setUp()
    {
        $this->object = new UserIdsOfAnswersOfMostPopular();
    }

    public function testGetUserIds()
    {

    }
}
