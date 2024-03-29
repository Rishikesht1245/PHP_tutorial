<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "Shinto";
// echo $name;

$age = 23;
// echo $age;

// $has_kids = false;
// echo $has_kids; // true : 1, false : nothing

// $cash_on_hand = 20.59;
// echo $cash_on_hand;

// concatenation .
// echo $name . " is " . $age . " years old"
// echo "${name} is ${age} years old";



// - - - - Arithematic operations - - - - //
$x = "5" + "5"; // output -10 (no concatenation)
echo var_dump($x);

// echo 10 -4;
// echo 10*10;
// echo 10%4;
// echo 10/6;



// - - - - Defining Constants - - - - //
// Constants are values that we donot want to change.

define("HOST", "localhost");
define("DB_NAME", "solar");

echo HOST, DB_NAME

?>