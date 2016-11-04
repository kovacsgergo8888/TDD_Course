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
        $pattern = '/(.*)(\!\[.*\])(\(.*\))(.*)/';
        $string = preg_replace_callback(
            $pattern,
            function ($matches) {
                $matches[2] = str_replace(array("![", "]"), "", $matches[2]);
                $matches[3] = str_replace(array("(", ")"), "", $matches[3]);
                return $matches[1] . "<img src=\"" . $matches[2] . "\" alt=\"" . $matches[3] . "\" />" . $matches[4];
            },
            $string
        );
        return $string;
    }
}