<?php

use PHPUnit\Framework\TestCase;

require_once 'src/Calculator.php';

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calc = new Calculator();

        $this->assertEquals(
            10,
            $calc->add(5,5)
        );
    }
}