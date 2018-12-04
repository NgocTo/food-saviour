<?php
session_start();

$email = $_POST['username'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$roleId = $_POST['roleId'];



$dsn = 'mysql:host=localhost; dbname=tovu_foodsaviour; charset=utf8mb4';
$dbusername = "tovu_bclub";
$dbpassword = "!bre@kf@5t!";


$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `users` (`id`, `username`, `password`, `firstName`, `lastName`, 'email', 'roleId') VALUES (NULL, '$username', '$password', '$firstName', '$lastName', '$email', '$roleId'); ");

$stmt->execute();

//header("Location: thankyou.php");
?>
