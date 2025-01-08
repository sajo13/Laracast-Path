<?php
use Core\Database;

$heading = " Note";

$id = $_GET['id'];
$currentUserId = 4;
//connect to our database, and execute a query
$config = require base_path('config.php');
$db = new Database($config['database']);

$note = $db->query('select * from notes where id= :id', [
    'id' => $id
])->findOrFail();



authorize($note['user_id'] === $currentUserId);

view("notes/note.view.php", [
    'heading' => $heading,
    'note' => $note
]);