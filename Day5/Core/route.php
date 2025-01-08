

<?php
$router = new \Core\Router(); 

$router->get('laracast-path/Day5', 'controllers/index.php');
$router->get('laracast-path/Day5/about', 'controllers/about.php');
$router->get('laracast-path/Day5/contact', 'controllers/contact.php');
$router->get('laracast-path/Day5/notes', 'controllers/notes/index.php');
$router->get('laracast-path/Day5/note', 'controllers/notes/show.php');
$router->delete('laracast-path/Day5/note', 'controllers/notes/destroy.php');
$router->get('laracast-path/Day5/notes/create', 'controllers/notes/create.php');
$router->post('laracast-path/Day5/notes', 'controllers/notes/store.php');
