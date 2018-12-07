<?php
require_once('database.php');
$userId = $_POST ['userId'];
$foodId = $_POST['foodId'];
$foodState = $_POST['foodState'];
$items= $pdo->prepare("UPDATE `userfood` SET `foodState` = '$foodState' WHERE `foodId` = '$foodId' AND `userId` = '$userId'");
$items->execute();
header("Location: index.php");
?>
