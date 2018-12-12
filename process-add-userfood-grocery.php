<?php
session_start();
require_once('database.php');
$userId = $_SESSION['id'];
$foodkey = $_POST['foodkey'];
$customAmount = $_POST['customAmount'];
$customDuration = $_POST['customDuration'];
$dateBought = $_POST['dateBought'];
echo $foodkey;
$stmt = $pdo->prepare("INSERT INTO `userfood`(`userId`, `foodId`, `customAmount`, `customDuration`, `date`)
		VALUES ('$userId', '$foodkey', '$customAmount', '$customDuration', '$dateBought'); ");
$count = $stmt->execute();

echo $count;
header("Location: grocery-store.php");
?>
