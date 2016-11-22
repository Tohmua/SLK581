<?php

use PHPUnit\Framework\TestCase;
use Prophecy\Prophet;
use SLK581\Fields\DateOfBirth;
use SLK581\Fields\FirstName;
use SLK581\Fields\Gender;
use SLK581\Fields\LastName;
use SLK581\Generator\SLK581;

class SLK581GeneratorTest extends TestCase
{
    public function testItConstructs()
    {
        $prophet = new Prophet();
        $firstName = $prophet->prophesize(FirstName::class);
        $lastName = $prophet->prophesize(LastName::class);
        $dob = $prophet->prophesize(DateOfBirth::class);
        $gender = $prophet->prophesize(Gender::class);

        $generator = new SLK581(
            $firstName->reveal(),
            $lastName->reveal(),
            $dob->reveal(),
            $gender->reveal()
        );

        $this->assertEquals(SLK581::class, get_class($generator));
    }

    public function testItGenerates()
    {
        $prophet = new Prophet();
        $firstName = $prophet->prophesize(FirstName::class);
        $firstName->secondLetter()->willReturn('B');
        $firstName->thirdLetter()->willReturn('C');
        $lastName = $prophet->prophesize(LastName::class);
        $lastName->secondLetter()->willReturn('B');
        $lastName->thirdLetter()->willReturn('C');
        $lastName->fifthLetter()->willReturn('E');
        $dob = $prophet->prophesize(DateOfBirth::class);
        $dob->day()->willReturn(01);
        $dob->month()->willReturn(02);
        $dob->year()->willReturn(1111);
        $gender = $prophet->prophesize(Gender::class);
        $gender->toInteger()->willReturn(2);

        $generator = new SLK581(
            $firstName->reveal(),
            $lastName->reveal(),
            $dob->reveal(),
            $gender->reveal()
        );

        $this->assertEquals('BCEBC010211112', $generator->generate());
    }
}
