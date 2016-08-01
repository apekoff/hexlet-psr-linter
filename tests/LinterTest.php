<?php

namespace PhpLinter;

class LinterTest extends \PHPUnit_Framework_TestCase
{
    public function testLinter()
    {
        $this->assertTrue(linter());
    }
}
