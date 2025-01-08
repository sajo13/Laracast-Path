<?php

$heading = " Note";

//connect to our database, and execute a query
$config = require('config.php');
$db = new Database($config);
$id = $_GET['id'];
$currentUserId = 4;

$note = $db->query('select * from notes where id= :id', [
    'id' => $id
])->findOrFail();


authorize($note['user_id'] === $currentUserId);

// var_dump($note);die();
require "views/notes/note.view.php";
