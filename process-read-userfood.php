<?php
require_once('database.php');
$items= $pdo->prepare("SELECT * FROM `userfood` JOIN `food` ON `userfood`.`foodId` = `food`.`id`
                                                JOIN `categories` ON `food`.`categoryId` = `categories`.`id`
                                                WHERE (`userfood`.`foodState` IS NULL) AND (`userfood`.`userId` = '$userId')
                                                ORDER BY `food`.`duration` ASC");
$items->execute();
$results = $items->fetchAll();
?>
