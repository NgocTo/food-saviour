<?php
session_start();
require_once('database.php');
$userId = $_SESSION['id'];
$foodId = $_GET['id'];
$item= $pdo->prepare("SELECT * FROM `userfood` JOIN `food` ON `userfood`.`foodId` = `food`.`id`
                        WHERE (`userfood`.`userId` = '$userId') AND (`userfood`.`foodId` = '$foodId')");
$item->execute();
$itemById = $item->fetch();
?>
