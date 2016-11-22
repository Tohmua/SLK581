<?php

namespace SLK581\Fields;

use SLK581\Exception\SLK581 as Exception;
use SLK581\Fields\Interfaces\Gender as GenderInterface;

/**
 * Code 1. Male
 * Code 2. Female
 * Code 3. Intersex or indeterminate
 * Code 9. Not stated/inadequately described
 */
class Gender implements GenderInterface
{
    const GENDER_OPTIONS = [1, 2, 3, 9];

    private $gender = 9;

    public function __construct($gender = 0)
    {
        if (!in_array($gender, static::GENDER_OPTIONS)) {
            throw new Exception('Invalid gender supplied. This is required.');
        }

        $this->gender = (int) $gender;
    }

    /**
     * Returns the integer value of the Gender 1, 2, 3 or 9
     *
     * @return integer [1, 2, 3, 9]
     */
    public function toInteger()
    {
        return (int) $this->gender;
    }
}
