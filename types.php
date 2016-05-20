<?php
declare(strict_types=1);

/**
* PHP is still a loosely typed language and does coarsing (casting) by default.
* The features have been extended with full type hinting and return type hinting.
* But we still have dynamically-typed variables, $a = []; $a = 1;
* You cannot define variables or arrays specific types,
* string[] $strings; int $a = 2;
* they have dinamical type depending on the value
*/

/**
 * Int can be considered a float but not viceversa
*/
var_dump(sumFloats(1, 2));
function sumFloats(float $first, float $second)
{
    return $first + $second;
}

/**
 * Not allow to pass a float instead of a int
 */
// var_dump(sumIntegers(1.0, 2));
function sumIntegers(int $first, int $second)
{
    return $first + $second;
}

/**
 * integer 1 is not considered bool, it would need casting.
*/
// var_dump(isTrue(true));
function isTrue(bool $return) : bool
{
    return $return;
}

die();




/**
 * Avoidable issue
 *
 */

// service
$customer = $this->authService->getCustomer;
$model->getVoucher($customer);



// model
/**
* @param int $customerId customer id
*/
function getVoucher($customerId)
{
    //query db
    //where customerId == $customerId

}
