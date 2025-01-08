<?php
use Core\Database;

$heading = " Note";

$id = $_GET['id'];
$currentUserId = 4;
//connect to our database, and execute a query
$config = require base_path('config.php');
$db = new Database($config);

// dd($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = $db->query('select * from notes where id= :id', [
        'id' => $id
    ])->findOrFail();
    
    
    authorize($note['user_id'] === $currentUserId);

    //form delete
    $db->query('delete from notes where id = :id', [
        'id' => $_POST['id']
    ]);

    header('location: /laracast-path/Day5/notes');
    exit();
} else {
    
    $note = $db->query('select * from notes where id= :id', [
        'id' => $id
    ])->findOrFail();
    
    
    authorize($note['user_id'] === $currentUserId);
    
    // var_dump($note);die();
    
    require view("notes/note.view.php",[
        'heading' => $heading,
        'note' => $note
    ]);
    
}
