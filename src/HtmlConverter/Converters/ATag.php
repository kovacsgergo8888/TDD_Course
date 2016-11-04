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
        $pattern = '/(.*)(\[.*\])(\(.*\))(.*)/';
        $string = preg_replace_callback(
            $pattern,
            function ($matches) {
                $matches[2] = str_replace(array("[", "]"), "", $matches[2]);
                $matches[3] = str_replace(array("(", ")"), "", $matches[3]);
                return $matches[1] . "<a href=\"" . $matches[2] . "\">" . $matches[3] . "</a>" . $matches[4];
            },
            $string
        );
        return $string;
    }
}