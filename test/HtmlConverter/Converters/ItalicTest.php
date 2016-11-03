<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.03.
 * Time: 9:21
 */

namespace HtmlConverter\Converters;


class ItalicTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Italic $converter
     */
    private $converter;

    public function setUp()
    {
        $this->converter = new Italic();
    }

    /**
     * @test
     */
    public function threeText()
    {
        $this->assertEquals('text1<i>text2</i>text3', $this->converter->convert('text1_text2_text3'));
    }

    /**
     * @test
     */
    public function twoText()
    {
        $this->assertEquals('ijfose<i>jseif</i>', $this->converter->convert('ijfose_jseif_'));
    }

    /**
     * @test
     */
    public function oneText()
    {
        $this->assertEquals('<i>joijr</i>', $this->converter->convert('_joijr_'));
    }

    /**
     * @test
     */
    public function oddMarkdowns()
    {
        $this->assertEquals('<i>text</i>asdf_', $this->converter->convert('_text_asdf_'));
    }

    /**
     * @test
     */
    public function twoMarkdownPair()
    {
        $this->assertEquals('<i>text</i>asdf<i>asd</i>', $this->converter->convert('_text_asdf_asd_'));
    }

    /**
     * @test
     */
    public function noMarkdown()
    {
        $this->assertEquals("text", $this->converter->convert("text"));
    }
}
