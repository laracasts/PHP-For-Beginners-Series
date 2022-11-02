<?php

require 'functions.php';

// Connect to the MySQL database.
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

// Tip: This should be wrapped in a try-catch. We'll learn how, soon.
$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts where id = 1");
$statement->execute();

$post = $statement->fetch(PDO::FETCH_ASSOC);

echo "<li>" . $post['title'] . "</li>";
