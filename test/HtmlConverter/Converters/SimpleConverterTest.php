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
     * @test
     */
    public function threeText()
    {
        $this->assertEquals('text1' . $this->replaceFront . 'text2' . $this->replaceBack . 'text3', $this->converter->convert('text1' . $this->markdown . 'text2' . $this->markdown . 'text3'));
    }

    /**
     * @test
     */
    public function twoText()
    {
        $this->assertEquals('ijfose' . $this->replaceFront . 'jseif' . $this->replaceBack . '', $this->converter->convert('ijfose' . $this->markdown . 'jseif' . $this->markdown . ''));
    }

    /**
     * @test
     */
    public function oneText()
    {
        $this->assertEquals($this->replaceFront . 'joijr' . $this->replaceBack, $this->converter->convert($this->markdown . 'joijr' . $this->markdown . ''));
    }

    /**
     * @test
     */
    public function oddMarkdowns()
    {
        $this->assertEquals($this->replaceFront . 'text' . $this->markdown . 'asdf' . $this->replaceBack, $this->converter->convert($this->markdown . 'text' . $this->markdown . 'asdf' . $this->markdown));
    }

    /**
     * @test
     */
    public function twoMarkdownPair()
    {
        $this->assertEquals($this->replaceFront . 'text' . $this->markdown . 'asdf' . $this->markdown . 'asd' . $this->replaceBack, $this->converter->convert($this->markdown . 'text' . $this->markdown . 'asdf' . $this->markdown . 'asd' . $this->markdown));
    }

    /**
     * @test
     */
    public function noMarkdown()
    {
        $this->assertEquals("text", $this->converter->convert("text"));
    }

    public function dataProvider()
    {
        return [
            ["text", "text"],
            [$this->markdown . "text" . $this->markdown, $this->replaceFront . "text" . $this->replaceBack],
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testFromProvided($input, $output)
    {
        $this->assertEquals($input, $output);
    }
}