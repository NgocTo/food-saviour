<?php
session_start();
require_once('database.php');
$userId = $_SESSION['id'];
$foodName = $_POST['foodName'];
$dateBought = $_POST['dateBought'];
$customDurationPost = $_POST['customDuration'];
$customAmountPost = $_POST['customAmount'];
$customDuration = ($customDurationPost != "")? "$customDurationPost" : "null";
$customAmount = ($customAmountPost != "")? "$customAmountPost" : "null";
$stmt = $pdo->prepare("SELECT * FROM `food` WHERE LOWER(`foodName`) = LOWER('$foodName')");
$stmt->execute();
$row = $stmt->fetch();
if($row) {
    $foodId = $row['id'];
    $stmt = $pdo->prepare("INSERT INTO `userfood`(`userId`, `foodId`, `date`, `customDuration`, `customAmount`)
    VALUES ('$userId', '$foodId', '$dateBought', $customDuration, $customAmount)");
} else {
    $foodId = 14; // custom food id
    $stmt = $pdo->prepare("INSERT INTO `userfood`(`userId`, `foodId`, `date`, `customFoodName`, `customDuration`, `customAmount`)
    VALUES ('$userId', '$foodId', '$dateBought', '$foodName', $customDuration, $customAmount)");
}
$count = $stmt->execute();
echo $count;
header("Location: index.php");
?>
