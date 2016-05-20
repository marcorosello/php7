<?php
/*
* There is rfc to allow nullable return option, it is already accepted
* https://wiki.php.net/rfc/nullable_types
*/
//nuable return in php 7.1
function answer(): ?int  {
    return null; //ok
}

//nulable parameter
function say(?string $msg) {
    if ($msg) {
        echo $msg;
    }
}

/**
 * Void return types
 * RFC already implemented
 * https://wiki.php.net/rfc/void_return_type
 *
 */
function lacks_return(): void {
   // valid
}

function lacks_return(): void {
   // invalid
   return true;
}


/**
 * There is a RFC currenly in voting proces
 * to allow types in properties
 * https://wiki.php.net/rfc/typed-properties#vote
 */
class Product
{
    private string $name;
    private float $price;
    private Currency $currency;
    private bool $active;
    private int $stock;
}
