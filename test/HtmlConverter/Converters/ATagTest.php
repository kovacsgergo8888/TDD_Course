<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.03.
 * Time: 9:22
 */

namespace HtmlConverter\Test\Converters;


use HtmlConverter\Converters\AbstractConverter;
use HtmlConverter\Converters\ATag;

class ATagTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AbstractConverter
     */
    private $converter;

    public function setUp()
    {
        $this->converter = new ATag();
    }

    public function testTextFromExample()
    {
        $this->assertEquals("text1<a href=\"text2\">text3</a>text4",$this->converter->convert("text1[text2](text3)text4"));
    }
}
