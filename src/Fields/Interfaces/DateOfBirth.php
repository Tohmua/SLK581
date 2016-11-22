<?php

namespace SLK581\Fields\Interfaces;

/**
 * If date of birth is not known or cannot be obtained, provision should be made to collect or estimate age. Collected
 * or estimated age would usually be in years for adults and to the nearest three months (or less) for children aged
 * less than two years. Additionally, an estimated date flag or a date accuracy indicator should be reported in
 * conjunction with all estimated dates of birth.
 *
 * For data collections concerned with children's services, it is suggested that the estimated date of birth of children
 * aged under 2 years should be reported to the nearest 3 month period, i.e. 0101, 0104, 0107, 0110 of the estimated
 * year of birth. For example, a child who is thought to be aged 18 months in October of one year would have his/her
 * estimated date of birth reported as 0104 of the previous year. Again, an estimated date flag or date accuracy
 * indicator http://meteor.aihw.gov.au/content/index.phtml/itemId/294429 should be reported in conjunction with all
 * estimated dates of birth.
 */
interface DateOfBirth
{
    public function __construct($dob);

    /**
     * Returns the two digit day of the Date Of Birth.
     *
     * @return number format of %d%d
     */
    public function day();

    /**
     * Returns the two digit month of the Date Of Birth.
     *
     * @return number format of %d%d
     */
    public function month();

    /**
     * Returns the four digit year of the Date Of Birth.
     *
     * @return number format of %d%d%d%d
     */
    public function year();
}
