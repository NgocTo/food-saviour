<?php
session_start();
require_once('database.php');
$userId = $_SESSION['id'];
$foodName = $_POST['foodName'];
$customDuration = ($_POST['customDuration'])? $_POST['customDuration'] : null;
$customAmount = ($_POST['customAmount'])? $_POST['customAmount'] : null;

$stmt = $pdo->prepare("SELECT * FROM `userfood` JOIN `food` ON `userfood`.`foodId` = `food`.`id` WHERE LOWER(`food`.`foodName`) = LOWER('$foodName')");
$stmt->execute();
$row = $stmt->fetch();

if($row) {
    $foodId = $row['foodId'];
    $stmt = $pdo->prepare("INSERT INTO `userfood`(`userId`, `foodId`, `customDuration`, `customAmount`)
    VALUES ('$userId', '$foodId', '$customDuration', '$customAmount')");
} else {
    $foodId = 14; // custom food id
    $stmt = $pdo->prepare("INSERT INTO `userfood`(`userId`, `foodId`, `customFoodName`, `customDuration`, `customAmount`)
    VALUES ('$userId', '$foodId', '$foodName', '$customDuration', '$customAmount')");
}
$stmt->execute();
header("Location: index.php");
?>
