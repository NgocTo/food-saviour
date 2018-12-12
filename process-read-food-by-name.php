<?php
session_start();
require_once('database.php');
$userId = $_SESSION['id'];
$foodName = $_GET['quick-entry-food-name'];
$stmt= $pdo->prepare("SELECT * FROM `food` WHERE (`food`.`foodName` = '$foodName')");
$stmt->execute();
$result = $stmt->fetch();
$item = json_encode($result);
echo($item);
?>
