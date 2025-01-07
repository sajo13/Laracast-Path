<?php

$heading = "My Notes";

//connect to our database, and execute a query
$config = require('config.php');
$db = new Database($config);
// // $id = $_GET['id'];

$query = "select * from notes";
$notes = $db->query($query)->fetchAll();

require "views/notes.view.php";