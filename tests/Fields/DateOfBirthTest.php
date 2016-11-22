<?php

use PHPUnit\Framework\TestCase;
use SLK581\Exception\SLK581 as Exception;
use SLK581\Fields\DateOfBirth;
use SLK581\Fields\Interfaces\DateOfBirth as DateOfBirthInterface;

class DateOfBirthTest extends TestCase
{
    public function testItConstructs()
    {
        $dob = new DateOfBirth('31/12/2016');
        $this->assertTrue(in_array(DateOfBirthInterface::class, class_implements($dob)));
    }

    public function testItGetsTheDay()
    {
        $dob = new DateOfBirth('10/11/2016');
        $this->assertEquals('10', $dob->day());
    }

    public function testItGetsTheMonth()
    {
        $dob = new DateOfBirth('10/11/2016');
        $this->assertEquals('11', $dob->month());
    }

    public function testItGetsTheYear()
    {
        $dob = new DateOfBirth('10/11/2016');
        $this->assertEquals('2016', $dob->year());
    }

    public function testItThrowsExceptionWithInvalidFormat1()
    {
        $this->setExpectedException(Exception::class);
        $dob = new DateOfBirth('10.11.2016');
    }

    public function testItThrowsExceptionWithInvalidFormat2()
    {
        $this->setExpectedException(Exception::class);
        $dob = new DateOfBirth('2016.11.10');
    }

    public function testItThrowsExceptionWithInvalidFormat3()
    {
        $this->setExpectedException(Exception::class);
        $dob = new DateOfBirth('10-11-2016');
    }

    public function testItThrowsExceptionWithInvalidFormat4()
    {
        $this->setExpectedException(Exception::class);
        $dob = new DateOfBirth('2016-11-10');
    }

    public function testItThrowsExceptionWithInvalidFormat5()
    {
        $this->setExpectedException(Exception::class);
        $dob = new DateOfBirth('2016/10/11');
    }

    public function testItThrowsExceptionWithAnInvalidDate()
    {
        $this->setExpectedException(Exception::class);
        $dob = new DateOfBirth('12/31/2016');
    }

    public function testItThrowsExceptionWithAnInvalidLeepYearDate()
    {
        $this->setExpectedException(Exception::class);
        $dob = new DateOfBirth('29/02/2001');
    }

    public function testItWorksWithSingleDigetDayAndMonths()
    {
        $this->setExpectedException(Exception::class);
        $dob = new DateOfBirth('1/1/2016');
    }
}
