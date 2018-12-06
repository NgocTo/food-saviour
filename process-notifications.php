<?php

require_once('database.php');
// $items= $pdo->prepare("SELECT * FROM `userfood`
//                         JOIN `food` ON `userfood`.`foodId` = `food`.`id`
//                         JOIN `categories` ON `food`.`categoryId` = `categories`.`id`
//                         WHERE (`userfood`.`foodState` IS NULL) AND (`userfood`.`userId` = '1') AND (`userfood`.`date` + `food`.`duration` <= 5)");
//                         notification is for when food is about to expire
//                         userfood table has date it was bought, which is tied to duration in food table
//                         so then based off this the logic is:
//                         date bought + duration = expiry
//                         expiry <= 5 days select the food
// $items->execute();
// while($food = $items->fetch()) {
//     print_r($food);
// }

// from Wasim
$items= $pdo->prepare("SELECT *, DATEADD(day, customDuration, date) AS ExpiryDate from userfood");
$items->execute();
// in fetch loop
if(strtotime($row['ExpiryDate']) < time()){
// add to expiredFoodsArray
}
// then outside the loop, echo the json of the expired foods array
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);

?>
