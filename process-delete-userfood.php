<?php
session_start();
require_once('database.php');
$userId = $_SESSION['id'];
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM `userfood` WHERE `id` = '$id' AND `userId` = '$userId'");
$stmt->execute();
header("Location: index.php");
?>
