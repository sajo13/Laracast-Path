<?php

/* ----- Variables & Data Types ----- */

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Brad'; // String // Can be single or double quotes
$age = 40; // Integer
$hasKids = true; // Boolean
$cashOnHand = 10.5; //Float

var_dump($cashOnHand);
echo "<br>";

/* --- Adding variables to strings -- */

// Double quotes can be used to add variables to strings
echo "$name is $age years old" . PHP_EOL;

// Better to do this
echo "${name} is ${age} years old" . PHP_EOL;

// Concatenate Strings

echo '<h3>' . $name . ' is ' . $age . ' years old</h3>' . PHP_EOL;
