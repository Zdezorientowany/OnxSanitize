<?php

use PHPUnit\Framework\TestCase;

class SanitizeTest extends TestCase
{
    public function testSanitizeTextRemoveTags()
    {
        $this->assertEquals('Hello', sanitizeText('<h1>Hello</h1>'));
    }

    public function testSanitizeTextTrim()
    {
        $this->assertEquals('Hello', sanitizeText(' Hello '));
    }
}