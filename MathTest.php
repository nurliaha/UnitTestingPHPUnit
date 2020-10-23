<?php
use PHPUnit\Framework\TestCase;
require 'Math.php';

class MathTest extends TestCase
{
    private $math;
 
    protected function setUp(): void
    {
        parent::setUp();
        $this->math = new Math();
    }
 
    protected function tearDown(): void
    {
        $this->math = NULL;
        parent::tearDown();
    }
 // Test User of Requirement/Spesification
    public function testSubtract()
    {
        $result = $this->math->subtract(1, 2);
        $this->assertEquals(-1, $result);
    }

    public function testSubtractWithFloatAndInteger()
    {
        $result = $this->math->subtract(2.85, 1);
        $this->assertEquals(1.85, $result);
    }

    public function testSubtractWithIntegerAndFloat()
    {
        $result = $this->math->subtract(10, 2.5);
        $this->assertEquals(7.5, $result);
    }

    public function testSubtractWithFloatAndFloat()
    {
        $result = $this->math->subtract(2.5, 5.0);
        $this->assertEquals(-2.5, $result);
    }

}
?>