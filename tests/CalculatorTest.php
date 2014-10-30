<?php namespace Acme;

class CalculatorTest extends \PHPUnit_Framework_TestCase {

    public function setUp()
    {
        $this->calc = new Calculator;
    }

    public function testResultDefaultsToNull()
    {
        $this->assertNull($this->calc->getResult());
    }

    public function testAddsNumbers()
    {
        $this->calc->setOperands(5);
        $this->calc->setOperation(new Addition);
        $result = $this->calc->calculate();

        $this->assertEquals(5, $result);
    }


    /**
    *   @expectedException InvalidArgumentException
    */
    public function testRequiresNumericValue()
    {
        $this->calc->setOperands('five');
        $this->calc->setOperation(new Addition);
        $this->calc->calculate();
    }

    public function testAcceptsMutlipleArgs()
    {
        $this->calc->setOperands(1, 2, 3, 4);
        $this->calc->setOperation(new Addition);
        $result = $this->calc->calculate();
        $this->assertEquals(10, $result);
    }

}