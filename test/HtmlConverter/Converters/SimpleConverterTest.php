<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.03.
 * Time: 18:37
 */

namespace HtmlConverter\Test\Converters;


use HtmlConverter\Converters\AbstractConverter;

abstract class SimpleConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AbstractConverter
     */
    protected $converter;
    /**
     * @var string
     */
    protected $markdown;
    /**
     * @var string
     */
    protected $replaceFront;
    /**
     * @var string
     */
    protected $replaceBack;

    /**
     * @dataProvider dataProvider
     */
    public function testFromProvided($input, $output)
    {
        $this->assertEquals($input, $output);
    }

    public function dataProvider()
    {
        return [
            ["text", "text"],
            [$this->markdown . "text" . $this->markdown, $this->replaceFront . "text" . $this->replaceBack],
            ['text1' . $this->markdown . 'text2' . $this->markdown . 'text3', "text1" . $this->replaceFront . "text2" . $this->replaceBack . "text3"],
            [$this->markdown . 'text2' . $this->markdown . 'text3', $this->replaceFront . "text2" . $this->replaceBack . "text3"],
            [$this->markdown . 'text2' . $this->markdown . $this->markdown . 'text3' . $this->markdown, $this->replaceFront . "text2" . $this->replaceBack . $this->replaceFront . "text3" . $this->replaceBack],
        ];
    }
}