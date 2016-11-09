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

    /** @var AbstractConverter[] $converters */
    protected $converters = [];

    public function addConverter($converter)
    {
        $this->converters[] = $converter;
    }

    public function __construct()
    {
        $this->addConverter(new ImgTag());
        $this->addConverter(new ATag());
        $this->addConverter(new Bold());
        $this->addConverter(new Italic());
        $this->addConverter(new InlineCode());
    }

    public function convert($string)
    {

        foreach ($this->converters as $converter) {
            $string = $converter->convert($string);
        }
        return $string;
    }
}