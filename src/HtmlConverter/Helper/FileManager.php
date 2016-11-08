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
    private $input;

    private $output;

    public function read()
    {
        try {
            return file_get_contents($this->input);
        } catch (\Exception $e) {
            die("Error reading file: " . $this->input . "\n" . $e);
        }
    }

    public function write($data)
    {
        file_put_contents($this->output, $data);
    }

    /**
     * @return mixed
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * @param mixed $input
     */
    public function setInput($input)
    {
        $this->input = $input;
    }

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * @param mixed $output
     */
    public function setOutput($output)
    {
        $this->output = $output;
    }
}