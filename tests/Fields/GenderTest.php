<?php

use PHPUnit\Framework\TestCase;
use SLK581\Fields\Gender;
use SLK581\Fields\Interfaces\Gender as GenderInterface;
use SLK581\Exception\SLK581 as Exception;

class GenderTest extends TestCase
{
    public function testItConstructs()
    {
        $gender = new Gender(1);
        $this->assertTrue(in_array(GenderInterface::class, class_implements($gender)));
    }

    public function testItWorksWithValidMaleGender()
    {
        $gender = new Gender(1);
        $this->assertEquals(1, $gender->toInteger());
    }

    public function testItWorksWithValidFemaleGender()
    {
        $gender = new Gender(2);
        $this->assertEquals(2, $gender->toInteger());
    }

    public function testItWorksWithValidUnknownGender()
    {
        $gender = new Gender(3);
        $this->assertEquals(3, $gender->toInteger());
    }

    public function testItWorksWithValidUnspecifiedGender()
    {
        $gender = new Gender(9);
        $this->assertEquals(9, $gender->toInteger());
    }

    public function testItThrowsExceptionWithInvalidGender()
    {
        $this->setExpectedException(Exception::class);
        $gender = new Gender(4);
    }
}
