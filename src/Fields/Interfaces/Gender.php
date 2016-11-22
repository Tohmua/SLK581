<?php

namespace SLK581\Fields\Interfaces;

/**
 * Code 1. Male
 * Code 2. Female
 * Code 3. Intersex or indeterminate
 * Code 9. Not stated/inadequately described
 */
interface Gender
{
    public function __construct($gender);

    /**
     * Returns the integer value of the Gender 1, 2, 3 or 9
     *
     * @return integer [1, 2, 3, 9]
     */
    public function toInteger();
}
