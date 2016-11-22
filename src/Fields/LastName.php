<?php

namespace SLK581\Fields;

use SLK581\Fields\Interfaces\LastName as LastNameInterface;

/**
 * Regardless of the length of a person’s name, the reported value should always be three characters long. If the legal
 * family name is not long enough to supply the requested letters (i.e. a legal family name of less than five letters)
 * then agencies should substitute the number ‘2’ to reflect the missing letters. The placement of a number ‘2’ should
 * always correspond to the same space that the missing letter would have within the 3-digit field. A number
 * (rather than a letter) is used for such a substitution in order to clearly indicate that an appropriate corresponding
 * letter from the person’s name is not available.
 */
class LastName implements LastNameInterface
{
    const LAST_NAME_MISSING = '9';
    const LAST_NAME_MISSING_LETTER = '2';

    private $lastName;

    public function __construct($lastName = '')
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns the second letter of the last name in upper case or an error code if missing.
     *
     * @return string
     */
    public function secondLetter()
    {
        return $this->charictor(1);
    }

    /**
     * Returns the third letter of the last name in upper case or an error code if missing.
     *
     * @return string
     */
    public function thirdLetter()
    {
        return $this->charictor(2);
    }

    /**
     * Returns the fifth letter of the last name in upper case or an error code if missing.
     *
     * @return string
     */
    public function fifthLetter()
    {
        return $this->charictor(4);
    }

    private function charictor($charictorNumber)
    {
        if (empty($this->lastName)) {
            $charictor = static::LAST_NAME_MISSING;
        } else if (! $charictor = substr($this->lastName, $charictorNumber,1)) {
            $charictor = static::LAST_NAME_MISSING_LETTER;
        }

        return strtoupper($charictor);
    }
}
