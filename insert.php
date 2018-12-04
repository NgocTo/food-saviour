<?php
require_once('database.php');
$foodId = $_POST['foodId'];
$customFoodName = $_POST['customFoodName'];
$customDuration = $_POST['customDuration'];
$customAmount = $_POST['customAmount'];
if ($customFoodName == NULL){
    $foodId = 14;
    $stmt = $pdo->prepare("INSERT INTO `userfood`(`foodId`, `customFoodName`, `customDuration`, `customAmount`) VALUES ('$foodId', '$customFoodName', '$customDuration', '$customAmount')");
}
$stmt->execute();
?>
