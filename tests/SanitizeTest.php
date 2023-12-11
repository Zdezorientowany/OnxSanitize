<?php

use PHPUnit\Framework\TestCase;
use Onx\Sanitize\Sanitize;

class SanitizeTest extends TestCase
{
    public function testSanitizeTextRemoveTags()
    {
        $this->assertEquals('Hello', Sanitize::text('<h1>Hello</h1>'));
    }

    public function testSanitizeTextTrim()
    {
        $this->assertEquals('Hello', Sanitize::text(' Hello '));
    }
}