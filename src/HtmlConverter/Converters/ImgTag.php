<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.03.
 * Time: 9:14
 */

namespace HtmlConverter\Converters;

/**
 * Class ImgTag
 * Do the <img> tag thing.
 * @package HtmlConverter\Converters
 */
class ImgTag extends AbstractConverter
{

    function convert($string)
    {
        $pattern = '/\!\[(.*)\]\((.*)\)/';
        $string = preg_replace($pattern, "<img src=\"$1\" alt=\"$2\" />", $string);
        return $string;
    }
}