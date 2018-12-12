<?php
session_start();
require_once('database.php');
$userId = $_SESSION['id'];
$id = $_POST['edit-id'];
$customFoodName = $_POST['edit-foodName'];
$dateBought = $_POST['edit-dateBought'];
$customDurationPost = $_POST['edit-customDuration'];
$customAmountPost = $_POST['edit-customAmount'];
$customDuration = ($customDurationPost != "")? "$customDurationPost" : "null";
$customAmount = ($customAmountPost != "")? "$customAmountPost" : "null";

$stmt = $pdo->prepare("UPDATE `userfood` SET `customFoodName` = '$customFoodName', `date` = '$dateBought', `customDuration` = $customDuration, `customAmount` = $customAmount WHERE `id` = '$id'");


$stmt->execute();
header("Location: index.php");
?>
