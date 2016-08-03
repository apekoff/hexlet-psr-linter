<?php

namespace PhpLinter;

class Linter
{
    public $file;
    public $line;
    public $error;
    public $value;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function parseFile($file)
    {
        $this->file = file_get_contents($file);
        // print_r($this->file);
        foreach (preg_split("/((\r?\n)|(\r\n?))/", $this->file) as $line) {
            // print_r($line);
            if (strpos($line, "function")) {
                if (preg_match("(function\s(.*)\()", $line, $result)) {
                    echo ($result[0] . "\n");
                    // $this->value = $result[0];
                    // isGoodFunc($this->value);
                }
            }
        }
    }

    public function isGoodFunc($value)
    {

    }
}
