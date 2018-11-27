<?php
require_once('database.php');
$items= $pdo->prepare("SELECT * FROM `food` JOIN `categories` ON `food`.`categoryId` = `categories`.`id`");
$items->execute();
?>
