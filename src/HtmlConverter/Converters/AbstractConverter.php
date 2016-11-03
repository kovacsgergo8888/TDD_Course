<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.02.
 * Time: 22:34
 */

namespace HtmlConverter\Converters;

abstract class AbstractConverter
{
    abstract function convert($string);
}