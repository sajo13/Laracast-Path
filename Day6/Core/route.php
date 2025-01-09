

<?php
$router = new \Core\Router(); 

$router->get('laracast-path/Day6', 'controllers/index.php');
$router->get('laracast-path/Day6/about', 'controllers/about.php');
$router->get('laracast-path/Day6/contact', 'controllers/contact.php');
$router->get('laracast-path/Day6/notes', 'controllers/notes/index.php');
$router->get('laracast-path/Day6/note', 'controllers/notes/show.php');
$router->delete('laracast-path/Day6/note', 'controllers/notes/destroy.php');
$router->get('laracast-path/Day6/notes/create', 'controllers/notes/create.php');
$router->post('laracast-path/Day6/notes', 'controllers/notes/store.php');

$router->get('laracast-path/Day6/note/edit', 'controllers/notes/edit.php');
$router->patch('laracast-path/Day6/note', 'controllers/notes/update.php');