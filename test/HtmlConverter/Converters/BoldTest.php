<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.02.
 * Time: 22:24
 */

namespace HtmlConverter\Converters;

use PHPUnit_Framework_TestCase;

class BoldTest extends PHPUnit_Framework_TestCase
{
    public function testConvert()
    {
        $converter = new Bold();

        $this->assertEquals('text1<i>text2</i>text3', $converter->convert('text1**text2**text3'));
        $this->assertEquals('ijfose<i>jseif</i>', $converter->convert('ijfose**jseif**'));
        $this->assertEquals('<i>joijr</i>', $converter->convert('**joijr**'));
    }
}