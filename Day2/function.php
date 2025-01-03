<?php
/* ------------ Functions ----------- */

// Basic function with no parameters
function registerUser()
{
  return "user has been registered";
}

// Output the result of registerUser()
echo registerUser();
echo "<br>";

// Function with a parameter
function registerUserWithName($name)
{
  return "${name} has been registered";
}

echo registerUserWithName('Arun');
echo "<br>";

// Function with default parameter values
function subtract($num1 = 10, $num2 = 5)
{
  return $num1 - $num2;
}

echo "Called subtract value: " . subtract();  // Uses default values of 10 and 5
echo "<br>";

// Anonymous function for addition
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

echo "Called add function: " . $add(5, 5);
echo "<br>";

// Arrow function for multiplication
$multiply = fn($num1, $num2) => $num1 * $num2;

echo "Called multiply function: " . $multiply(5, 5);
echo "<br>";
