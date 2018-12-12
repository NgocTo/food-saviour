<?php
session_start();
require_once('database.php');
$userId = $_SESSION['id'];
$id = $_GET['id'];
$stmt= $pdo->prepare("SELECT * FROM `userfood` JOIN `food` ON `userfood`.`foodId` = `food`.`id`
                        WHERE (`userfood`.`userId` = '$userId') AND (`userfood`.`id` = '$id')");
$stmt->execute();
$result = $stmt->fetch();
$item = json_encode($result);
echo($item);
?>
