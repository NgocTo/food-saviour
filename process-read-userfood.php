<?php
require_once('database.php');
$items= $pdo->prepare("SELECT *, `userfood`.`id` AS 'userFoodId'
                        FROM `userfood` JOIN `food` ON `userfood`.`foodId` = `food`.`id`
                        JOIN `categories` ON `food`.`categoryId` = `categories`.`id`
                        WHERE `userfood`.`userId` = '$userId'
                        ORDER BY `food`.`duration` ASC");
$items->execute();
$results = $items->fetchAll();

function calculateExpiryDate($dateAdded, $duration) {
    $date = new DateTime();
    $today = $date->getTimestamp();
    $dateAddedNum = strtotime($dateAdded);
    $dateDiffNum = $today - $dateAddedNum;
    $dateDiff = floor($dateDiffNum / (60 * 60 * 24));
    return $expireDate = $duration - $dateDiff;
}
?>
