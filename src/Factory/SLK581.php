<?php

namespace SLK581\Factory;

use SLK581\Exception\SLK581 as Exception;
use SLK581\Fields\FirstName;
use SLK581\Fields\Gender;
use SLK581\Fields\DateOfBirth;
use SLK581\Fields\LastName;
use SLK581\Generator\SLK581 as Generator;

class SLK581
{
    public static function create($firstName, $lastName, $dob, $gender)
    {
        try {
            $slk581 = new Generator(
                new FirstName($firstName),
                new LastName($lastName),
                new DateOfBirth($dob),
                new Gender($gender)
            );
        } catch (Exception $e) {
            throw $e;
        }

        return $slk581;
    }
}
