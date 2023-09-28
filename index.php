<?php
require '../vendor/autoload.php';

$servername = "localhost";
$username = "root";
$password = "root123";
$schema = "php-project";

$conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
Flight::set("connection", $conn);

Flight::start();
?>
