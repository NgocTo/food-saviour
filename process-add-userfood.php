<?php
session_start();
require_once('database.php');
$userId = $_SESSION['id'];
$foodName = $_POST['foodName'];
$customDurationPost = $_POST['customDuration'];
$customAmountPost = $_POST['customAmount'];
$customDuration = ($customDurationPost != "")? "$customDurationPost" : "null";
$customAmount = ($customAmountPost != "")? "$customAmountPost" : "null";
$stmt = $pdo->prepare("SELECT * FROM `food` WHERE LOWER(`foodName`) = LOWER('$foodName')");
$stmt->execute();
$row = $stmt->fetch();
if($row) {
    $foodId = $row['id'];
    $stmt = $pdo->prepare("INSERT INTO `userfood`(`userId`, `foodId`, `customDuration`, `customAmount`)
    VALUES ('$userId', '$foodId', $customDuration, $customAmount)");
} else {
    $foodId = 14; // custom food id
    $stmt = $pdo->prepare("INSERT INTO `userfood`(`userId`, `foodId`, `customFoodName`, `customDuration`, `customAmount`)
    VALUES ('$userId', '$foodId', '$foodName', $customDuration, $customAmount)");
}
$stmt->execute();
header("Location: index.php");
?>
