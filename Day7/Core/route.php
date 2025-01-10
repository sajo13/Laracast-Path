

<?php
$router = new \Core\Router(); 

$router->get('laracast-path/Day7', 'controllers/index.php');
$router->get('laracast-path/Day7/about', 'controllers/about.php');
$router->get('laracast-path/Day7/contact', 'controllers/contact.php');
$router->get('laracast-path/Day7/notes', 'controllers/notes/index.php')->only('auth');
$router->get('laracast-path/Day7/note', 'controllers/notes/show.php');
$router->delete('laracast-path/Day7/note', 'controllers/notes/destroy.php');
$router->get('laracast-path/Day7/notes/create', 'controllers/notes/create.php');
$router->post('laracast-path/Day7/notes', 'controllers/notes/store.php');

$router->get('laracast-path/Day7/note/edit', 'controllers/notes/edit.php');
$router->patch('laracast-path/Day7/note', 'controllers/notes/update.php');

$router->get('laracast-path/Day7/register', 'controllers/registration/create.php')->only('guest');
$router->post('laracast-path/Day7/register', 'controllers/registration/store.php')->only('guest');

$router->get('laracast-path/Day7/login', 'controllers/sessions/create.php')->only('guest');
$router->post('laracast-path/Day7/session', 'controllers/sessions/store.php')->only('guest');
$router->delete('laracast-path/Day7/session', 'controllers/sessions/destroy.php')->only('auth');