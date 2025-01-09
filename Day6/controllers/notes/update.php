<?php

use Core\Validator;
use Core\Database;
use Core\App;

$heading = " Note";

$id = $_POST['id'];
$currentUserId = 4;
//connect to our database, and execute a query
$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id= :id', [
    'id' => $id
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$errors = [];
if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}
if (! empty($errors)) {
    return view("notes/edit.view.php", [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

//UPDATE `notes` SET `body` = 'namaste india13' WHERE `notes`.`id` = 2;

$db->query('UPDATE notes SET body = :body WHERE id = :id', [
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);

header('location: /laracast-path/Day6/notes');
die();
