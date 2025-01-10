<?php
use Core\Database;
use Core\App;
use Core\Authenticator;
use Core\Validator;

$db = App::resolve(Database::class);

$heading = "Store";
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if(!Validator::email($email)) {
    $errors['email'] = 'Please provide an email address';
}

if(!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password within 7-255 charcters';
}

if( !empty($errors) ) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

function checkUserExist($db, $email)
{
    $users =  $db->query('SELECT * from users WHERE email = :email', [
        'email' => $email
    ])->find();
    return $users;
}

$users = checkUserExist($db, $email);
// dd($users);

if( $users ) {
    //redirect to user
    header('location: /laracast-path/Day7/register');
    die();
}else {
    //insert new record
    // dd($_POST);
    try {
            $user = $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
            ]);

           
            (new Authenticator)->login(['email' => $email]);
            
            // Redirect to the notes page after the insert
            header('Location: /laracast-path/Day7/');
            die();
        } catch (Exception $e) {
            // Handle any errors that occur during the insertion
            dd('Error inserting user: ' . $e->getMessage());
        }
    header('location: /laracast-path/Day7/register');
}
