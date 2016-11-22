<?php

namespace SLK581\Fields\Interfaces;

/**
 * Regardless of the length of a person’s name, the reported value should always be three characters long. If the legal
 * family name is not long enough to supply the requested letters (i.e. a legal family name of less than five letters)
 * then agencies should substitute the number ‘2’ to reflect the missing letters. The placement of a number ‘2’ should
 * always correspond to the same space that the missing letter would have within the 3-digit field. A number
 * (rather than a letter) is used for such a substitution in order to clearly indicate that an appropriate corresponding
 * letter from the person’s name is not available.
 */
interface LastName
{
    public function __construct($lastName);

    /**
     * Returns the second letter of the name in upper case or an error code if missing.
     *
     * @return string
     */
    public function secondLetter();

    /**
     * Returns the third letter of the name in upper case or an error code if missing.
     *
     * @return string
     */
    public function thirdLetter();

    /**
     * Returns the fifth letter of the name in upper case or an error code if missing.
     *
     * @return string
     */
    public function fifthLetter();
}
