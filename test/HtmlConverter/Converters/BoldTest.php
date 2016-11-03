<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.02.
 * Time: 22:24
 */

namespace HtmlConverter\Test\Converters;

use HtmlConverter\Converters\Bold;

class BoldTest extends SimpleConverterTest
{
    public function setUp()
    {
        $this->converter = new Bold();
        $this->markdown = '**';
        $this->replaceFront = "<strong>";
        $this->replaceBack = "</strong>";
    }

}
