<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

for($i = 0; $i < 10 ; $i++) {
    echo "Iteration $i <br>";
}

/* ------------ While Loop ------------ */
$x = 5;
while($x > 0){
    echo "while loop Iteration $x <br>";
    $x--;
}


/* ------------ Do While loop ------------ */
$x = 4;

do {
    echo "Do While Number: $x <br>";
    $x++;
  } while ($x <= 5);

/* ------------ Foreach Loop ------------ */

// Use the keys within the loop for an associative array

$person = [
    [ 'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
    ],
    [ 'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
    ]
  ];
  
// Iterate through the outer array (list of people)
foreach ($person as $index => $individual) {
    echo "Person " . ($index + 1) . " Details:<br>"; // Display which person we're looking at
    // Iterate through each person's data (inner array)
    foreach ($individual as $key => $val) {
        echo "Foreach ${key} - ${val} <br>";
    }
    echo "<br>"; // Line break between each person's details
}