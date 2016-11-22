<?php

use PHPUnit\Framework\TestCase;
use SLK581\SLK581;

/**
 * This is an integration test really, but meh
 */
class SLK581Test extends TestCase
{
    public function testSLK581()
    {
        $slk581 = new SLK581();
        $this->assertEquals('ASNIR111120162', $slk581->generate('firstname', 'lastname', '11/11/2016', 2));
    }

    public function testSLK581NoFirstLastNames()
    {
        $slk581 = new SLK581();
        $this->assertEquals('99999111120162', $slk581->generate('', '', '11/11/2016', 2));
    }

    public function testSLK581MissingFirstLastNameLetters()
    {
        $slk581 = new SLK581();
        $this->assertEquals('EI2H2111120162', $slk581->generate('Ph', 'Lei', '11/11/2016', 2));
    }

    public function testMissingDobError()
    {
        $slk581 = new SLK581();
        $response = $slk581->generate('firstname', 'lastname', '', 2);

        $this->assertFalse($response);
        $this->assertEquals('SLK581 Error: No Date of Birth supplied. This is required.', $slk581->errorMessage());
    }

    public function testInvalidDobFormatError()
    {
        $slk581 = new SLK581();
        $response = $slk581->generate('firstname', 'lastname', '2016/20/10', 2);

        $this->assertFalse($response);
        $this->assertEquals('SLK581 Error: Invalid DoB Date Format. This should be dd/mm/yyyy.', $slk581->errorMessage());
    }

    public function testMissingGenderError()
    {
        $slk581 = new SLK581();
        $response = $slk581->generate('firstname', 'lastname', '01/01/2016', 'male');

        $this->assertFalse($response);
        $this->assertEquals('SLK581 Error: Invalid gender supplied. This is required.', $slk581->errorMessage());
    }
}
