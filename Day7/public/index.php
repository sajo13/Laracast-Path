<?php
use Core\Session;
use Core\ValidationException;

session_start();

const BASE_PATH = __DIR__.'/../';
require BASE_PATH.'Core/functions.php';


// require base_path("database.php");
// require base_path("Response.php");
spl_autoload_register(function ($class) {

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});
require BASE_PATH. 'bootstrap.php';

$router = new \Core\Router(); 
$routes = require BASE_PATH . "Core/route.php";


$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);
    return redirect($router->previousUrl());
}

Session::unflash();
?>