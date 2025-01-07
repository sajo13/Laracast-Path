<?php

$heading = " Note";

//connect to our database, and execute a query
$config = require('config.php');
$db = new Database($config);
$id = $_GET['id'];

$note = $db->query('select * from notes where id= :id',['id' => $id])->fetch();

// var_dump($notes);die();
require "views/note.view.php";