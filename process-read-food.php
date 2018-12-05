<?php
require_once('database.php');
$items= $pdo->prepare("SELECT * FROM `food` JOIN `categories` ON `food`.`categoryId` = `categories`.`id`
                                            ORDER BY `food`.`foodName` ASC");
$items->execute();
$food = $items->fetchAll();
?>
