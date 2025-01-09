<?php
use Core\App;
use Core\Database;

$heading = "My Notes";

//connect to our database, and execute a query
$db = App::resolve(Database::class);
// // $id = $_GET['id'];

$query = "select * from notes where user_id = 4";
$notes = $db->query($query)->get();


view("notes/notes.view.php",[
    'heading' => $heading,
    'notes' => $notes
]);