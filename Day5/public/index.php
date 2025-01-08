<?php



const BASE_PATH = __DIR__.'/../';
require BASE_PATH.'Core/functions.php';

// require base_path("database.php");
// require base_path("Response.php");

spl_autoload_register(function ($class) {

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

require base_path("Core/routes.php");
//connect to our database, and execute a query
// $config = require('config.php');
// $db = new Database($config);
// // $id = $_GET['id'];

// $query = "select * from posts";
// $posts = $db->query($query)->fetchAll();


// foreach ( $posts as $post) {
//     echo "<li>". $post['title'] ."</li>";
// }
?>