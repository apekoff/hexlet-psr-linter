<?php

namespace PhpLinter;

class LinterTest extends \PHPUnit_Framework_TestCase
{
    public function testLinter()
    {
        $linter = new Linter();
        $this->assertTrue($linter->linter());
    }
}
