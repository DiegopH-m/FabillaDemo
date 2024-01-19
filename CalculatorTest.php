<?php

use PHPUnit\Framework\TestCase;

require 'Calculator.php';

class CalculatorTest extends TestCase {
    public function testAddition() {
        $calculator = new Calculator();
        $result = $calculator->calculate(5, 3, '+');
        $this->assertEquals(8, $result);
    }

    public function testSubtraction() {
        $calculator = new Calculator();
        $result = $calculator->calculate(10, 4, '-');
        $this->assertEquals(6, $result);
    }

    public function testMultiplication() {
        $calculator = new Calculator();
        $result = $calculator->calculate(6, 2, '*');
        $this->assertEquals(12, $result);
    }

    public function testDivision() {
        $calculator = new Calculator();
        $result = $calculator->calculate(15, 3, '/');
        $this->assertEquals(5, $result);
    }

    public function testDivisionByZero() {
        $calculator = new Calculator();
        $result = $calculator->calculate(10, 0, '/');
        $this->assertEquals("Cannot divide by zero", $result);
    }

    public function testInvalidOperator() {
        $calculator = new Calculator();
        $result = $calculator->calculate(5, 3, '%');
        $this->assertEquals("Invalid operator", $result);
    }
}
