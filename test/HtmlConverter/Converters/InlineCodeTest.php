<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.03.
 * Time: 9:29
 */

namespace HtmlConverter\Test\Converters;


use HtmlConverter\Converters\InlineCode;

class InlineCodeTest extends SimpleConverterTest
{
    public function setUp()
    {
        $this->converter = new InlineCode();
        $this->markdown = "`";
        $this->replaceFront = "<pre>";
        $this->replaceBack = "</pre>";
    }

}
