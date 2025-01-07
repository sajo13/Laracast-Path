<?php
require "functions.php";

// require "routes.php";
require "database.php";

//connect to our database, and execute a query
$config = require('config.php');
$db = new Database($config);
$id = $_GET['id'];

$query = "select * from posts where id = ?";
$posts = $db->query($query, [$id])->fetchAll();


foreach ( $posts as $post) {
    echo "<li>". $post['title'] ."</li>";
}
?>