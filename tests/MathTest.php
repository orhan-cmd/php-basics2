<?php

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testAddition()
    {
        require_once __DIR__ . '/../index.php';
        $this->assertEquals(5, add(2, 3));
    }
}