<?php

use PHPUnit\Framework\TestCase;
use SLK581\Fields\Interfaces\LastName as LastNameInterface;
use SLK581\Fields\LastName;

class LastNameTest extends TestCase
{
    public function testItConstructs()
    {
        $lastName = new LastName('Sammy');
        $this->assertTrue(in_array(LastNameInterface::class, class_implements($lastName)));
    }

    public function testItGetsSecondChr()
    {
        $lastName = new LastName('Sammy');
        $this->assertEquals('A', $lastName->secondLetter());
    }

    public function testItGetsSecondChrIfNotExsist()
    {
        $lastName = new LastName('S');
        $this->assertEquals('2', $lastName->secondLetter());
    }

    public function testItGetsSecondChrIfNothingSet()
    {
        $lastName = new LastName('');
        $this->assertEquals('9', $lastName->secondLetter());
    }

    public function testItGetsThirdChr()
    {
        $lastName = new LastName('Sammy');
        $this->assertEquals('M', $lastName->thirdLetter());
    }

    public function testItGetsThirdChrIfNotExsist()
    {
        $lastName = new LastName('Sa');
        $this->assertEquals('2', $lastName->thirdLetter());
    }

    public function testItGetsThirdChrIfNothingSet()
    {
        $lastName = new LastName('');
        $this->assertEquals('9', $lastName->thirdLetter());
    }

    public function testItGetsFifthChr()
    {
        $lastName = new LastName('Sammy');
        $this->assertEquals('Y', $lastName->fifthLetter());
    }

    public function testItGetsFifthChrIfNotExsist()
    {
        $lastName = new LastName('Samm');
        $this->assertEquals('2', $lastName->fifthLetter());
    }

    public function testItGetsFifthChrIfNothingSet()
    {
        $lastName = new LastName('');
        $this->assertEquals('9', $lastName->fifthLetter());
    }
}
