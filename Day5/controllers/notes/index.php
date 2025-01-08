<?php
use Core\Database;

$heading = "My Notes";

//connect to our database, and execute a query
$config = require base_path('config.php');
$db = new Database($config['database']);
// // $id = $_GET['id'];

$query = "select * from notes where user_id = 4";
$notes = $db->query($query)->get();


require view("notes/notes.view.php",[
    'heading' => $heading,
    'notes' => $notes
]);