<?php
require "functions.php";

// require "routes.php";
require "database.php";

//connect to our database, and execute a query

$db = new Database();
$posts = $db->query("select * from posts");


foreach ( $posts as $post) {
    echo "<li>". $post['title'] ."</li>";
}
?>