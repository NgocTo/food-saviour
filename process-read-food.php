<?php
require_once('database.php');
$items= $pdo->prepare("SELECT `food`.`id` AS `foodkey`, `food`.*, `categories`.* FROM `food` JOIN `categories` ON `food`.`categoryId` = `categories`.`id`
                                            ORDER BY `food`.`foodName` ASC");
$items->execute();
$food = $items->fetchAll();
?>
