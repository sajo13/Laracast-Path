<?php

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

$routes = [
    'laracast-path/Day4' => 'controllers/index.php',
    'laracast-path/Day4/about' => 'controllers/about.php',
    'laracast-path/Day4/notes' => 'controllers/notes.php',
    'laracast-path/Day4/note' => 'controllers/note.php',
    'laracast-path/Day4/contact' => 'controllers/contact.php',
];

function routeToController($uri, $routes) {
    // var_dump($uri);die();
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);