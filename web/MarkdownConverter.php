<?php
/**
 * Created by PhpStorm.
 * User: kovacsgergely
 * Date: 2016.11.02.
 * Time: 21:22
 */

use HtmlConverter\Converters\MarkdownConverter;
use HtmlConverter\Helper\FileManager;

require_once '../vendor/autoload.php';

$fileManager = new FileManager();
$converter = new MarkdownConverter;

$fileManager->setInput('text_files/in/asd.txt');
$fileManager->setOutput('text_files/out/asd.txt');

$result = $converter->convert($fileManager->read());
$fileManager->write($result);
