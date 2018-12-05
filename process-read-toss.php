<?php
require_once('database.php');
$items= $pdo->prepare("SELECT * FROM `userfood` JOIN `food` ON `userfood`.`foodId` = `food`.`id`
                                                JOIN `categories` ON `food`.`categoryId` = `categories`.`id`
                                                WHERE `userfood`.`foodState` = 'toss'
                                                ORDER BY `food`.`foodName` DESC");
$items->execute();
$results = $items->fetchAll();
?>
