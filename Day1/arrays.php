<?php

/* ----- Arrays ----- */

echo "Indexed array <br>";

$books = [
    "War and Peace",
    "Ulysses",
    "Utopia",
    "Waste Land"
];


for ($i = 0; $i < count($books); $i++) {
    echo "Book " . ($i + 1) . ": " . $books[$i] . "<br>";
}

echo "Associative array" . PHP_EOL;
$person = [
    "name" => "arun",
    "age" => 28,
    "city" => "dubai"
];

$message = "Person details are, name: " . $person["name"] . ", age: " . $person["age"] . ", and city are: " . $person["city"];
?>


<?= $message ?>


<?php
echo "multi dimensional array" . PHP_EOL;


$students = [
    ["name" => "John", "age" => 21, "grade" => "A"],
    ["name" => "Jane", "age" => 22, "grade" => "B"],
    ["name" => "Jim", "age" => 23, "grade" => "C"]
];

echo "<pre>";
var_dump($students);
echo "</pre>";