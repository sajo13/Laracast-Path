<?php

$heading = "Home";

$_SESSION['name'] ='sajo';
view("index.view.php",[
    'heading' => $heading
]);