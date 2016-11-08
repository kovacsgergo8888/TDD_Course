<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.04.
 * Time: 9:03
 */

namespace HtmlConverter\Converters;

class MarkdownConverter
{
    protected $converters = [
        "ImgTag",
        "ATag",
        "Bold",
        "InlineCode",
        "Italic",
    ];

    protected $Bold;
    protected $ATag;
    protected $ImgTag;
    protected $InlineCode;
    protected $Italic;

    public function __construct()
    {
        $this->ImgTag = new ImgTag();
        $this->ATag = new ATag();
        $this->Bold = new Bold();
        $this->InlineCode = new InlineCode();
        $this->Italic = new Italic();
    }

    public function convert($string)
    {

        foreach ($this->converters as $converter) {
            $string = $this->$converter->convert($string);
        }
        return $string;
    }
}