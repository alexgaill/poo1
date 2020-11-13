<?php

use Core\Database;

require "../Autoloader.php";
Autoloader::register();

$db = new Database();

$query = $db->pdo->query("SELECT * FROM orders");
var_dump($query->fetchAll());