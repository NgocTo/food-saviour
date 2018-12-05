<?php

require_once('database.php');
$userId = $_POST ['userId'];
$foodId = $_POST['foodId'];
$foodState = $_POST['foodState'];
$items= $pdo->prepare("UPDATE `userfood` SET `foodState` = '$foodState' WHERE `foodId` = '$foodId' AND `userId` = '$userId'");
$items->execute();
header("Location: index.php");
?>

<?php
require_once('database.php');
$userId = $_POST ['userId'];
$foodId = $_POST['foodId'];
$customFoodName = $_POST['customFoodName'];
$customDuration = $_POST['customDuration'];
$customAmount = $_POST['customAmount'];
if ($customFoodName == NULL){
    $foodId = 14;
    $stmt = $pdo->prepare("UPDATE `userfood` SET `foodId`, `customFoodName`, `customDuration`, `customAmount`) VALUES ('$foodId', '$customFoodName', '$customDuration', '$customAmount') WHERE `foodId` = '$foodId' AND `userId` = '$userId'");
}
$stmt->execute();
header("Location: index.php");
?>
