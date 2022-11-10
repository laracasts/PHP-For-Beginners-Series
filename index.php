<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = :id";

$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);
