<?php

use PHPUnit\Framework\TestCase;
use SLK581\Fields\FirstName;
use SLK581\Fields\Interfaces\FirstName as FirstNameInterface;

class FirstNameTest extends TestCase
{
    public function testItConstructs()
    {
        $firstName = new FirstName('Sammy');
        $this->assertTrue(in_array(FirstNameInterface::class, class_implements($firstName)));
    }

    public function testItGetsSecondChr()
    {
        $firstName = new FirstName('Sammy');
        $this->assertEquals('A', $firstName->secondLetter());
    }

    public function testItGetsSecondChrIfNotExsist()
    {
        $firstName = new FirstName('S');
        $this->assertEquals('2', $firstName->secondLetter());
    }

    public function testItGetsSecondChrIfNothingSet()
    {
        $firstName = new FirstName('');
        $this->assertEquals('9', $firstName->secondLetter());
    }

    public function testItGetsThirdChr()
    {
        $firstName = new FirstName('Sammy');
        $this->assertEquals('M', $firstName->thirdLetter());
    }

    public function testItGetsThirdChrIfNotExsist()
    {
        $firstName = new FirstName('Sa');
        $this->assertEquals('2', $firstName->thirdLetter());
    }

    public function testItGetsThirdChrIfNothingSet()
    {
        $firstName = new FirstName('');
        $this->assertEquals('9', $firstName->thirdLetter());
    }
}
