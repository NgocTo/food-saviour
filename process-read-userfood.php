<?php
require_once('database.php');
$items= $pdo->prepare("SELECT * FROM `userfood` JOIN `food` ON `userfood`.`foodId` = `food`.`id` 
                                                JOIN `categories` ON `food`.`categoryId` = `categories`.`id`
                                                ORDER BY `food`.`duration` ASC");
$items->execute();
$results = $items->fetchAll();
?>
