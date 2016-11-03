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
        $pattern = '/\*\*[A-Za-z0-9]+\*\*/';
//        $pattern = '/\*\*/';
        preg_match_all($pattern, $string, $matches);
        if (is_array($matches[0])) {
            foreach ($matches[0] as $match) {

            }
        }
        return '1';
        //todo under develop
    }
}