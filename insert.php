<?php
session_start();
require_once('database.php');
$foodName = $_POST['foodName'];
$duration = $_POST['duration'];
$categoryId = $_POST['categoryId'];
$stmt = $pdo->prepare("INSERT INTO `food`(`foodName`, `duration`, `categoryId`) VALUES ('$foodName', '$duration', '$categoryId')");
$stmt->execute();
?>
