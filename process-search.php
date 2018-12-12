<?php
require_once('database.php');
$search = $_GET['add-search'];
$stmt = $pdo->prepare("SELECT * FROM `food` WHERE `foodName` LIKE '$search%' LIMIT 5");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo($json);
?>
