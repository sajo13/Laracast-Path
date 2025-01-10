

<?php
$router = new \Core\Router(); 

$router->get('laracast-path/Day7', 'index.php');
$router->get('laracast-path/Day7/about', 'about.php');
$router->get('laracast-path/Day7/contact', 'contact.php');
$router->get('laracast-path/Day7/notes', 'notes/index.php')->only('auth');
$router->get('laracast-path/Day7/note', 'notes/show.php');
$router->delete('laracast-path/Day7/note', 'notes/destroy.php');
$router->get('laracast-path/Day7/notes/create', 'notes/create.php');
$router->post('laracast-path/Day7/notes', 'notes/store.php');

$router->get('laracast-path/Day7/note/edit', 'notes/edit.php');
$router->patch('laracast-path/Day7/note', 'notes/update.php');

$router->get('laracast-path/Day7/register', 'registration/create.php')->only('guest');
$router->post('laracast-path/Day7/register', 'registration/store.php')->only('guest');

$router->get('laracast-path/Day7/login', 'sessions/create.php')->only('guest');
$router->post('laracast-path/Day7/session', 'sessions/store.php')->only('guest');
$router->delete('laracast-path/Day7/session', 'sessions/destroy.php')->only('auth');