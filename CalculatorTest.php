<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
        parent::tearDown();
    }
    // Test User of Requirement/Spesification

    public function testSubtractwithInteger()
    {
        $result = $this->calculator->do_subtract(9, 4);
        $this->assertEquals(5, $result);
    }

    public function testSubtractZerotwithInteger()
    {
        $result = $this->calculator->do_subtract(0, 9);
        $this->assertEquals(-9, $result);

    }

    public function testSubtractWithResultMinusOrZeroOrPositive()
    {
        $result = $this->calculator->do_subtract(-10, 8);
        $this->assertEquals(-18, $result);
    }

    // Decision Table

     public function testSubtractWithIntegerAndInteger()
    {
        $result = $this->calculator->do_subtract(100, 50);
        $this->assertEquals(50, $result);
    }

    public function testSubtractWithFloatAndInteger()
    {
        $result = $this->calculator->do_subtract(2.85, 1);
        $this->assertEquals("Eror", $result);
    }

    public function testSubtractWithIntegerAndFloat()
    {
        $result = $this->calculator->do_subtract(10, 2.5);
        $this->assertEquals("Eror", $result);
    }

    public function testSubtractWithFloatAndFloat()
    {
        $result = $this->calculator->do_subtract(2.5, 5.00);
        $this->assertEquals("Eror", $result);
    }

    // Eror Guessing
    public function testSubtractWithPositiveAndPositiveInteger()
    {
        $result = $this->calculator->do_subtract(800, 299);
        $this->assertEquals(501, $result);
    }

    public function testSubtractWithPositiveAndNegativeInteger()
    {
        $result = $this->calculator->do_subtract(85, -23);
        $this->assertEquals(108, $result);
    }

    public function testSubtractWithNegativeAndPositiveInteger()
    {
        $result = $this->calculator->do_subtract(-5, 10);
        $this->assertEquals(-15, $result);
    }

    public function testSubtractWithNegativeAndNegativeInteger()
    {
        $result = $this->calculator->do_subtract(-45, -10);
        $this->assertEquals(-35, $result);
    }

    public function testSubtractZerotWithZero()
    {
        $result = $this->calculator->do_subtract(0, 0);
        $this->assertEquals(0, $result);
    }

    public function testSubtractZerotWithPositiveInteger()
    {
        $result = $this->calculator->do_subtract(0, 1);
        $this->assertEquals(-1, $result);
    }

     public function testSubtractZerotWithNegativeInteger()
    {
        $result = $this->calculator->do_subtract(0, -3);
        $this->assertEquals(3, $result);
    }

    public function testSubtractWithIntegerAndString()
    {
        $result = $this->calculator->do_subtract(1, "a");
        $this->assertEquals("Eror", $result);
    }

     public function testSubtractWithStringAndString()
    {
        $result = $this->calculator->do_subtract("aa", "a");
        $this->assertEquals("Eror", $result);
    }

} 
?>