<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__ . '/../lib/Calculator.php');

class CalculatorTest extends TestCase
{
	public function testAdd()
	{
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->add(2, 2));
        self::assertEquals(-10, $calculator->add(-15, 5));
	}
	public function testMulti()
    {
        $calculator = new Calculator();
        self::assertEquals(8,$calculator->multiply(4,2));
        self::assertEquals(0,$calculator->multiply(4,0));
    }
    public function testDevide()
    {
        $calculator = new Calculator();
        self::assertEquals(7, $calculator->divide(7, 1));
        self::assertEquals(3.5, $calculator->divide(7, 2));
        self::assertEquals(0, $calculator->divide(0, 1));

    }
    public function testDivideException()
    {
        $calculator = new Calculator();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Divider cant be a zero');
        $calculator->divide(5,0);
    }
    public function testSubstract()
    {
        $calculator = new Calculator();
        self::assertEquals(5,$calculator->subtract(13,8));
        self::assertEquals(-5,$calculator->subtract(8,13));
        self::assertEquals(0,$calculator->subtract(10,10));
    }
    public function testSquareRoot()
    {
        $calculator = new Calculator();
        self::assertEquals(2, $calculator->squareRoot(4));
        self::assertEquals(1, $calculator->squareRoot(1));
        self::assertEquals(1.4142,$calculator->squareRoot(2));
    }
    public function testExponentiation()
    {
        $calculator = new Calculator();
        self::assertEquals(8, $calculator->exponentiation(2,3));
        self::assertEquals(1, $calculator->exponentiation(1,499));
        self::assertEquals(64, $calculator->exponentiation(2,6));
    }

}
