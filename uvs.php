<?php
/*
* Uniform Variable Syntax
*/

class User {
    public $name = 'Marco Rosello';

    public function getCompanies() {
        return ['Boozt', 'Estina'];
    }

    public static function position() {
        return 'Web developer';
    }
}

$user = new User;

$properties = ['first' => 'name', 'second' => 'position'];
$name = 'Marco Rosello';

/*
 * Before php 5 you could do this
 * It won't check the array first and then get that value of the class
*/
$user->$properties['first'];
$$properties['first'];
User::$property['second']();

/*
 * In php 7 it will try to get the property of the user, so it needs curlies to
 * find the value of the array first, the same like mathematical
*/
print $user->{$properties['first']}  . '<br>';
print ${$properties['first']}  . '<br>';
print User::{$properties['second']}() . '<br>';
/*
 * However you can still access an array returned by a function
*/
print $user->getCompanies()[0]  . '<br>';
