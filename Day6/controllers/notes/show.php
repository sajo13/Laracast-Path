<?php
use Core\App;
use Core\Database;

$heading = " Note";

$id = $_GET['id'];
$currentUserId = 4;
//connect to our database, and execute a query
$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id= :id', [
    'id' => $id
])->findOrFail();



authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    'heading' => $heading,
    'note' => $note
]);