<?php

namespace Tests\ExamplePathTests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testIfTrueIsEqualTrue()
    {
        $this->assertTrue(true);
    }

    public function testIfTrueIsEqualFalse()
    {
        $this->assertTrue(false);
    }
}