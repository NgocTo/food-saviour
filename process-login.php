<?php
require_once('database.php');
$email = $_POST['loginEmail'];
$password = $_POST['loginPass'];


$stmt = $pdo->prepare("
	SELECT * FROM `users`
	WHERE `email` = '$email'
	AND `password` = '$password'");

$stmt->execute();

if($row = $stmt->fetch()){
	$_SESSION['logged-in'] = true;
	$_SESSION['username'] = $row['username'];
	$_SESSION['role'] = $row['roleId'];
	$_SESSION['id'] = $row['id'];
	header("Location: index.php");
}else{
	header("Location: welcome.php");
}
?>
