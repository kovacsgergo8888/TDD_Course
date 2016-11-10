<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.10.
 * Time: 20:31
 */

namespace StackOverflowProvider\Test\Api;


use StackOverflowProvider\Api\Builder\Builder;
use StackOverflowProvider\Api\Builder\BuilderFactory;

abstract class BuilderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BuilderFactory
     */
    protected $builderFactory;

    /**
     * @var string
     */
    protected $builderType;

    /**
     * @var Builder
     */
    protected $builder;

    public function setUp()
    {
        $this->builderFactory = new BuilderFactory();
        $this->builder = $this->builderFactory->getBuilder($this->builderType);
    }
}
