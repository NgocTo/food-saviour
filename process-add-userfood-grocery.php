<?php
session_start();
require_once('database.php');
$userId = $_SESSION['id'];
$foodName = $_POST['foodName'];
$foodkey = $_POST['foodkey'];
$customAmount = $_POST['customAmount'];
$dateBought = $_POST['dateBought'];

$stmt = $pdo->prepare("INSERT INTO `userfood`(`id`, `userId`, `foodName`, `foodkey`, `customAmount`, `date`, `foodState`)
		VALUES (NULL, '$userId' '$foodName', '$foodkey', '$customAmount', '$dateBought', NULL
		); ");
$stmt->execute();

header("Location: grocery-store.php");
?>
