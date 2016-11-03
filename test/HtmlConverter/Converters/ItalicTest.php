<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.03.
 * Time: 9:21
 */

namespace HtmlConverter\Test\Converters;

use HtmlConverter\Converters\Italic;

class ItalicTest extends SimpleConverterTest
{

    public function setUp()
    {
        $this->converter = new Italic();
        $this->markdown = '_';
        $this->replaceFront = "<i>";
        $this->replaceBack = "</i>";
    }
}
