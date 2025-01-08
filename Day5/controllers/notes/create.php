<?php
use Core\Database;
use Core\Validator;
$config = require base_path('config.php');
$db = new Database($config['database']);


$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];


    if(! Validator::string($_POST['body'], 1 , 1000)) {
        $errors['body'] = 'A body of no more than 1000  chars required';
    }


    if (strlen($_POST['body']) > 1000) {
        $errors['body'] = 'A body can not be more than 1000';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 4
        ]);
    }
}

require view("notes/notes-create.view.php",[
    'heading' => $heading,
]);