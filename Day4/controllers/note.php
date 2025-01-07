<?php

$heading = " Note";

//connect to our database, and execute a query
$config = require('config.php');
$db = new Database($config);
$id = $_GET['id'];

$note = $db->query('select * from notes where id= :id', [
    'id' => $id
])->fetch();

if (! $note) {
    abort();
}

$currentUserId = 4;
if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}
// var_dump($note);die();
require "views/note.view.php";
