<?php
require_once('database.php');
$id = $_POST['id'];
$userId = $_POST ['userID'];
$foodId = $_POST['foodId'];
$foodState = $_POST['foodState'];
$items= $pdo->prepare("UPDATE `userfood` SET `foodState` = '$foodState' WHERE `foodId` = '$foodId' AND `userId` = '$userId'");
$items->execute();
?>
