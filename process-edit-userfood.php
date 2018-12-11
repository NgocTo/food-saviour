<?php
session_start();
require_once('database.php');
$userId = $_SESSION['id'];
$id = $_GET['id'];
$foodName = $_POST['foodName'];
$customDuration = ($_POST['customDuration'])? $_POST['customDuration'] : null;
$customAmount = ($_POST['customAmount'])? $_POST['customAmount'] : null;

$stmt = $pdo->prepare("SELECT * FROM `userfood` JOIN `food` ON `userfood`.`foodId` = `food`.`id` WHERE LOWER(`food`.`foodName`) = LOWER('$foodName')");
$stmt->execute();
$row = $stmt->fetch();

if($row) {
    $foodId = $row['foodId'];
    $stmt = $pdo->prepare("UPDATE `userfood` SET `customDuration` = '$customDuration', `customAmount` = '$customAmount' WHERE `id` = '$id' AND `userId` = '$userId'");
} else {
    $foodId = 14; // custom food id
    $stmt = $pdo->prepare("UPDATE `userfood` SET `customFoodName` = '$customFoodName', `customDuration` = '$customDuration', `customAmount` = '$customAmount' WHERE `id` = '$id' AND `userId` = '$userId'");
}

// $stmt->execute();
// header("Location: index.php");
?>
