<?php
$routes = require BASE_PATH . "route.php";

function routeToController($uri, $routes) {
    // var_dump($uri);die();
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
routeToController($uri, $routes);