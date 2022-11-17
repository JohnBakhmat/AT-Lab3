<?php


use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testShouldAddTwoNumbers()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(1, 2, '+');
        $this->assertEquals(3, $result);
    }

    public function testShouldNotAddIfLessOrMoreThenTwoOperands()
    {
        $calculator = new Calculator();

        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate(1, 2, 3, '+');

    }


    public function testShouldNotAddNumbersIfThereIsNoOperator()
    {
        $calculator = new Calculator();
        $this->expectException(ArgumentCountError::class);
        $calculator->evaluate(1, 2);
    }

    public function testShouldNotAddNumbersIfOperatorIsInvalid()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate(1, 2, 'x');
    }

    public function testShouldNotAddNumbersIfThereIsAnInvalidOperand()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate(1, 'x', '+');
    }

    public function testShouldNotAddNumbersIfThereIsAnInvalidOperand2()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate('x', 2, '+');
    }

    public function testShouldNotAddNumbersIfThereIsAnInvalidOperand3()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate('x', 'y', '+');
    }

    public function testShouldNotAddNumbersIfThereIsAnInvalidOperandAndOperator()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate('x', 'y', 'z');
    }

    public function testShouldWorkOnFloatNumbers()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(1.5, 2.5, '+');
        $this->assertEquals(4, $result);
    }

    public function testShouldWorkOnNegativeNumbers()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(-1, -2, '+');
        $this->assertEquals(-3, $result);
    }

    public function testShouldWorkOnNegativeAndPositiveNumbers()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(-1, 2, '+');
        $this->assertEquals(1, $result);
    }

    public function testShouldWorkOnNegativeAndPositiveNumbersWithFloats()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(-1.5, 2.5, '+');
        $this->assertEquals(1, $result);
    }



    //Subtraction

    public function testShouldSubtractTwoNumbers()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(1, 2, '-');
        $this->assertEquals(-1, $result);
    }

    public function testShouldNotSubtractIfLessOrMoreThenTwoOperands()
    {
        $calculator = new Calculator();

        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate(1, 2, 3, '-');

    }


    public function testShouldNotSubtractNumbersIfThereIsNoOperator()
    {
        $calculator = new Calculator();
        $this->expectException(ArgumentCountError::class);
        $calculator->evaluate(1, 2);
    }

    public function testShouldNotSubtractNumbersIfOperatorIsInvalid()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate(1, 2, 'x');
    }

    public function testShouldNotSubtractNumbersIfThereIsAnInvalidOperand()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate(1, 'x', '-');
    }

    public function testShouldNotSubtractNumbersIfThereIsAnInvalidOperand2()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate('x', 2, '-');
    }

    public function testShouldNotSubtractNumbersIfThereIsAnInvalidOperand3()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate('x', 'y', '-');
    }

    public function testShouldNotSubtractNumbersIfThereIsAnInvalidOperandAndOperator()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate('x', 'y', 'z');
    }

    public function testShouldWorkOnFloatNumbersSubtraction()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(1.6, 2.5, '-');
        $this->assertEqualsWithDelta(-0.9, $result, 0.1);
    }

    public function testShouldWorkOnNegativeNumbersSubtraction()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(-1, -2, '-');
        $this->assertEquals(1, $result);
    }

    public function testShouldWorkOnNegativeAndPositiveNumbersSubtraction()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(-1, 2, '-');
        $this->assertEquals(-3, $result);
    }

    public function testShouldWorkOnNegativeAndPositiveNumbersWithFloatsSubtraction()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(-1.5, 2.5, '-');
        $this->assertEquals(-4, $result);
    }

    //Multiplication


    public function testShouldMultiplyTwoNumbers()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(1, 2, '*');
        $this->assertEquals(2, $result);
    }

    public function testShouldNotMultiplyIfLessOrMoreThenTwoOperands()
    {
        $calculator = new Calculator();

        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate(1, 2, 3, '*');

    }


    public function testShouldNotMultiplyNumbersIfThereIsNoOperator()
    {
        $calculator = new Calculator();
        $this->expectException(ArgumentCountError::class);
        $calculator->evaluate(1, 2);
    }

    public function testShouldNotMultiplyNumbersIfOperatorIsInvalid()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate(1, 2, 'x');
    }

    public function testShouldNotMultiplyNumbersIfThereIsAnInvalidOperand()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate(1, 'x', '*');
    }

    public function testShouldNotMultiplyNumbersIfThereIsAnInvalidOperand2()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate('x', 2, '*');
    }

    public function testShouldNotMultiplyNumbersIfThereIsAnInvalidOperand3()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate('x', 'y', '*');
    }

    public function testShouldNotMultiplyNumbersIfThereIsAnInvalidOperandAndOperator()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate('x', 'y', 'z');
    }

    public function testShouldWorkOnFloatNumbersMultiplication()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(1.6, 2.5, '*');
        $this->assertEquals(4, $result);
    }

    public function testShouldWorkOnNegativeNumbersMultiplication()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(-1, -2, '*');
        $this->assertEquals(2, $result);
    }

    public function testShouldWorkOnNegativeAndPositiveNumbersMultiplication()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(-1, 2, '*');
        $this->assertEquals(-2, $result);
    }

    public function testShouldWorkOnNegativeAndPositiveNumbersWithFloatsMultiplication()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(-1.5, 2.5, '*');
        $this->assertEquals(-3.75, $result);
    }

    //Division


    public function testShouldDivideTwoNumbers()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(1, 2, '/');
        $this->assertEquals(0.5, $result);
    }

    public function testShouldNotDivideIfLessOrMoreThenTwoOperands()
    {
        $calculator = new Calculator();

        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate(1, 2, 3, '/');

    }


    public function testShouldNotDivideNumbersIfThereIsNoOperator()
    {
        $calculator = new Calculator();
        $this->expectException(ArgumentCountError::class);
        $calculator->evaluate(1, 2);
    }

    public function testShouldNotDivideNumbersIfOperatorIsInvalid()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate(1, 2, 'x');
    }

    public function testShouldNotDivideNumbersIfThereIsAnInvalidOperand()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate(1, 'x', '/');
    }

    public function testShouldNotDivideNumbersIfThereIsAnInvalidOperand2()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate('x', 2, '/');
    }

    public function testShouldNotDivideNumbersIfThereIsAnInvalidOperand3()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate('x', 'y', '/');
    }

    public function testShouldNotDivideNumbersIfThereIsAnInvalidOperandAndOperator()
    {
        $calculator = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calculator->evaluate('x', 'y', 'z');
    }

    public function testShouldWorkOnFloatNumbersDivision()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(1.6, 2.5, '/');
        $this->assertEquals(0.64, $result);
    }

    public function testShouldWorkOnNegativeNumbersDivision()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(-1, -2, '/');
        $this->assertEquals(0.5, $result);
    }


    public function testShouldWorkOnNegativeAndPositiveNumbersDivision()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(-1, 2, '/');
        $this->assertEquals(-0.5, $result);
    }

    public function testShouldWorkOnNegativeAndPositiveNumbersWithFloatsDivision()
    {
        $calculator = new Calculator();
        $result = $calculator->evaluate(-1.5, 2.5, '/');
        $this->assertEquals(-0.6, $result);
    }

    public function testShouldNotDivideByZero()
    {
        $calculator = new Calculator();
        $this->expectException(DivisionByZeroError::class);
        $calculator->evaluate(1, 0, '/');
    }
}
