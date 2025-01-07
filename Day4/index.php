<?php
require "functions.php";

// require "routes.php";
require "database.php";

//connect to our database, and execute a query
$config = require('config.php');
$db = new Database($config);
$posts = $db->query("select * from posts")->fetchAll();


foreach ( $posts as $post) {
    echo "<li>". $post['title'] ."</li>";
}
?>