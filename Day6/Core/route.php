

<?php
$router = new \Core\Router(); 

$router->get('laracast-path/Day6', 'controllers/index.php');
$router->get('laracast-path/Day6/about', 'controllers/about.php');
$router->get('laracast-path/Day6/contact', 'controllers/contact.php');
$router->get('laracast-path/Day6/notes', 'controllers/notes/index.php')->only('auth');
$router->get('laracast-path/Day6/note', 'controllers/notes/show.php');
$router->delete('laracast-path/Day6/note', 'controllers/notes/destroy.php');
$router->get('laracast-path/Day6/notes/create', 'controllers/notes/create.php');
$router->post('laracast-path/Day6/notes', 'controllers/notes/store.php');

$router->get('laracast-path/Day6/note/edit', 'controllers/notes/edit.php');
$router->patch('laracast-path/Day6/note', 'controllers/notes/update.php');

$router->get('laracast-path/Day6/register', 'controllers/registration/create.php')->only('guest');
$router->post('laracast-path/Day6/register', 'controllers/registration/store.php')->only('guest');

$router->get('laracast-path/Day6/login', 'controllers/sessions/create.php')->only('guest');
$router->post('laracast-path/Day6/session', 'controllers/sessions/store.php')->only('guest');
$router->delete('laracast-path/Day6/session', 'controllers/sessions/destroy.php')->only('auth');