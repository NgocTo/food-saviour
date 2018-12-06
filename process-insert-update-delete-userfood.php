<?php
require_once('database.php');
$foodId = $_POST['foodId'];
$userId = $_POST['userId'];
$customFoodName = $_POST['customFoodName'];
$customDuration = $_POST['customDuration'];
$customAmount = $_POST['customAmount'];
$action = $_POST ['action'];

$stmt = $pdo->prepare("SELECT * FROM `food` WHERE `foodName` LIKE '$customFoodName'");
$stmt->execute();

$row = $stmt->fetch();

if ($row == NULL){
    $foodId = 14;} //if the item cannot be found, it is a custom item

 //on clicking a button, you pass in a variable
 //0 == add, 1 == edit, 2 == delete

//if you click add and they already have one, the action gets changed to an update action
if ($action !== 2) {
    $stmt = $pdo->prepare("SELECT * FROM `userfood` WHERE `customFoodName` LIKE '$customFoodName'");
    $stmt->execute();

    $row = $stmt->fetch();
    if ($row > 0) {$action === 1}

}
if ($action === 0) {

    $stmt = $pdo->prepare("INSERT INTO `userfood`(`foodId`, `customFoodName`, `customDuration`, `customAmount`)
    VALUES ('$foodId', '$customFoodName', '$customDuration', '$customAmount')");

}else if ($action === 1) {

    $stmt = $pdo->prepare("UPDATE `userfood` SET `foodId` = '$foodId', `customFoodName` = '$customFoodName',
    `customDuration` = '$customDuration', `customAmount` = '$customAmount' WHERE `foodId` = '$foodId' AND `userId` = '$userId'");

}else if ($action === 2) {

    $stmt = $pdo->prepare("DELETE FROM `userfood` WHERE  `foodId` = '$foodId' AND `userId` = '$userId'");

};
$stmt->execute();
?>
