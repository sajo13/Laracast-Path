<?php

/* ----- Conditionals & Boolean ----- */


$name = "Marcos";

$read = true;

if($read) {
 $message = "You have read ". " " . $name;
} else {
 $message = "You haven't read". " ". $name;
}

echo $message;