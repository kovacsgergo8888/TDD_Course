<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.03.
 * Time: 9:12
 */

namespace HtmlConverter\Converters;

/**
 * Class InlineCode
 * Do the ` ` -> <pre></pre> thing.
 * @package HtmlConverter\Converters
 */
class InlineCode extends AbstractConverter
{

    function convert($string)
    {
        return $this->simpleEvenChange('`', "<pre>", "</pre>", $string);
    }
}