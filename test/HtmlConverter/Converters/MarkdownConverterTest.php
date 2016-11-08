<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.04.
 * Time: 9:06
 */

namespace HtmlConverter\Test\Converters;


use HtmlConverter\Converters\MarkdownConverter;

class MarkdownConverterTest extends \PHPUnit_Framework_TestCase
{
    public function testConvert()
    {
        $converter = new MarkdownConverter();
        $text = 'This **is** simple _[http://index.hu](link)_ and this is a picture ![http://r.ddmcdn.com/s_f/o_1/cx_633/cy_0/cw_1725/ch_1725/w720/APL/uploads/2014/11/too-cute-doggone-it-ivideo-playlist.jpg](of a dog).';
        $expected = 'This <strong>is</strong> simple <i><a href="http://index.hu">link</a></i> and this is a picture <img src="http://r.ddmcdn.com/s_f/o_1/cx_633/cy_0/cw_1725/ch_1725/w720/APL/uploads/2014/11/too-cute-doggone-it-ivideo-playlist.jpg" alt="of a dog" />.';
        $result = $converter->convert($text);

        $this->assertEquals($expected, $result);
    }
}
