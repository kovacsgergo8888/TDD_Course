<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.03.
 * Time: 9:29
 */

namespace HtmlConverter\Test\Converters;


use HtmlConverter\Converters\AbstractConverter;
use HtmlConverter\Converters\ImgTag;

class ImgTagTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AbstractConverter
     */
    private $converter;

    public function setUp()
    {
        $this->converter = new ImgTag();
    }

    public function testTextFromExample()
    {
        $this->assertEquals('text1<img src="text2" alt="text3" />text4', $this->converter->convert('text1![text2](text3)text4'));
    }
}
