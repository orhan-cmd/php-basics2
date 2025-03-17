<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../index.php';

class MathTest extends TestCase
{
    public function testAddition()
    {
        $this->assertEquals(5, add(2, 3));
    }

    public function testSubstraction()
    {
        $this->assertEquals(0, substract(5, 5));
    }
}