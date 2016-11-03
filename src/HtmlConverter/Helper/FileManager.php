<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.02.
 * Time: 21:23
 */

namespace HtmlConverter\Helper;

class FileManager
{
    private $file;

    public function getContents()
    {
        try {
            return file_get_contents($this->file);
        } catch (\Exception $e) {
            die("Error reading file: " . $this->file . "\n" . $e);
        }
    }
}