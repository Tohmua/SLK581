<?php

namespace SLK581\Generator;

use SLK581\Fields\Interfaces\FirstName;
use SLK581\Fields\Interfaces\Gender;
use SLK581\Fields\Interfaces\DateOfBirth;
use SLK581\Fields\Interfaces\LastName;

class SLK581
{
    private $firstName;
    private $lastName;
    private $dob;
    private $gender;

    public function __construct(FirstName $firstName, LastName $lastName, DateOfBirth $dob, Gender $gender) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dob = $dob;
        $this->gender = $gender;
    }

    public function generate()
    {
        return sprintf(
            '%1s%1s%1s%1s%1s%02d%02d%4d%1d',
            $this->lastName->secondLetter(),
            $this->lastName->thirdLetter(),
            $this->lastName->fifthLetter(),
            $this->firstName->secondLetter(),
            $this->firstName->thirdLetter(),
            $this->dob->day(),
            $this->dob->month(),
            $this->dob->year(),
            $this->gender->toInteger()
        );
    }
}
