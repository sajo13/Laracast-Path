<?php
require "functions.php";

// require "routes.php";

//connect to our MySql db
$dsn = "mysql:host=localhost;port=3306;dbname=laracast";
$username = "root";
$password = "";

$pdo = new PDO($dsn, $username, $password);

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ( $posts as $post) {
    echo "<li>". $post['title'] ."</li>";
}
?>