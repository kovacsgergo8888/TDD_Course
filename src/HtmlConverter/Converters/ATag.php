<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.03.
 * Time: 9:13
 */

namespace HtmlConverter\Converters;

/**
 * Class ATag
 * Do the hyperlink thing.
 * @package HtmlConverter\Converters
 */
class ATag extends AbstractConverter
{

    function convert($string)
    {
        $pattern = '/\[(.*)\]\((.*)\)/';
        $string = preg_replace($pattern, "<a href=\"$1\">$2</a>", $string);
        return $string;
    }
}