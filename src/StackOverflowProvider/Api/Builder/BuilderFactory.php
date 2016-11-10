<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.10.
 * Time: 20:00
 */

namespace StackOverflowProvider\Api\Builder;


class BuilderFactory
{
    public function getBuilder($type)
    {
        switch ($type) {
            case BuilderTypes::FEATURED:
                return new FeaturedBuilder();
            case BuilderTypes::ANSWERS:
                return new AnswersBuilder();
        }
    }

}