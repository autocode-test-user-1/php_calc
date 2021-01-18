<?php


use PHPUnit\Framework\TestCase;

require "../src/mini/MiniCalc.php";


class MiniCalcTest extends TestCase
{

    protected MiniCalc $calc;

    protected function setUp(): void
    {
        $this->calc = new MiniCalc();
    }


    public function testMultiply()
    {
        $this->assertEquals(55, $this->calc->multiply(11, 5));
    }

    public function testDivide()
    {
        $this->assertEquals(4, $this->calc->divide(16, 0));
    }

    public function testAdd(): void
    {
        $this->assertEquals(5, $this->calc->add(2, 3));
    }

    public function testSubtract()
    {
        $this->assertEquals(6, $this->calc->subtract(8, 6));
    }
}
