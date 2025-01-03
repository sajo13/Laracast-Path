<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
*/

$fruits = ['apple', 'banana', 'orange'];

// Get array length
echo count($fruits);
echo "<br>";

// Search array
echo in_array('banana', $fruits);
echo "<br>";

// Add to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // Adds to the beginning

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element
unset($fruits[2]);

// Split into chunks of 2
echo "<pre>";
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);
echo "</pre><br>";

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
echo "<br>";
$arr4 = [...$arr1, ...$arr2]; // Use Spread
var_dump($arr4);
echo "<br>";


// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

echo "<pre>";
echo "array combine <br>";
var_dump($c);
echo "</pre><br>";
