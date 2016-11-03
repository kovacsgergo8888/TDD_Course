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

    /**
     * @var Bold $converter
     */
    private $converter;

    public function setUp()
    {
        $this->converter = new Bold();
    }

    /**
     * @test
     */
    public function threeText()
    {
        $this->assertEquals('text1<strong>text2</strong>text3', $this->converter->convert('text1**text2**text3'));
    }

    /**
     * @test
     */
    public function twoText()
    {
        $this->assertEquals('ijfose<strong>jseif</strong>', $this->converter->convert('ijfose**jseif**'));
    }

    /**
     * @test
     */
    public function oneText()
    {
        $this->assertEquals('<strong>joijr</strong>', $this->converter->convert('**joijr**'));
    }

    /**
     * @test
     */
    public function oddMarkdowns()
    {
        $this->assertEquals('<strong>text**asdf</strong>', $this->converter->convert('**text**asdf**'));
    }

    /**
     * @test
     */
    public function twoMarkdownPair()
    {
        $this->assertEquals('<strong>text**asdf**asd</strong>', $this->converter->convert('**text**asdf**asd**'));
    }

    /**
     * @test
     */
    public function noMarkdown()
    {
        $this->assertEquals("text", $this->converter->convert("text"));
    }
}
