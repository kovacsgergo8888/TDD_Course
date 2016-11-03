<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.02.
 * Time: 22:32
 */

namespace HtmlConverter\Converters;

/**
 * Class Bold
 * Do the ** ** -> <strong></strong> thing
 *
 * @package HtmlConverter\Converters
 */
class Bold extends AbstractConverter
{
    public function convert($string)
    {
       return $this->simpleEvenChange('\*\*', "<strong>", "</strong>", $string);
    }
}