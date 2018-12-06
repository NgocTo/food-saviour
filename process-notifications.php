<?php
require_once('database.php');
$date = new DateTime();
$today = $date->getTimestamp();
$stmt = $pdo->prepare("SELECT `foodName`, `customFoodName`, `date`, `duration`, `customDuration` FROM `userfood`
                        JOIN `food` ON `userfood`.`foodId` = `food`.`id`
                        WHERE (`userfood`.`foodState` IS NULL) AND (`userfood`.`userId` = '$userId')");
$stmt->execute();
$durations = $stmt->fetchAll();
?>
