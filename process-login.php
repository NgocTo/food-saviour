<?php
$username = $_POST['username'];
$password = $_POST['password'];

$dsn = 'mysql:host=localhost; dbname=tovu_foodsaviour; charset=utf8mb4';
$dbusername = "tovu_bclub";
$dbpassword = "!bre@kf@5t!";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("
	SELECT * FROM `users`
	WHERE `username` = '$username'
	AND `password` = '$password'");

$stmt->execute();

if($row = $stmt->fetch()){
	$_SESSION['logged-in'] = true;
	$_SESSION['username'] = $row['username'];
	$_SESSION['role'] = $row['role'];
	$_SESSION['id'] = $row['id'];

	header("Location: my-food.php");

}else{
	header("Location: welcome.php");
}
?>
