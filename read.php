<?php
session_start();
require_once('database.php');
$items= $pdo->prepare("SELECT * FROM `food` JOIN `categories` ON `food`.`categoryId` = `categories`.`id` ORDER BY `food`.`duration` ASC");
$items->execute();
$results = $items->fetchAll();
?>
