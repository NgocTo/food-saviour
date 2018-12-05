<?php
require_once('database.php');
$username='';
$password='';
$firstName='';
$lastName='';
$email='';
$roleId='';
// if(isset($_GET["signupUsername"])) {

  $username = $_POST['signupUsername'];
  $password = $_POST['signupPass'];
  $firstName = $_POST['signupFirstName'];
  $lastName = $_POST['signupLastName'];
  $email = $_POST['signupEmail'];
  $roleId = 2;
// }

$stmt = $pdo->prepare("INSERT INTO `users` (`id`, `username`, `password`, `firstName`, `lastName`, `email`, `roleId`) VALUES (NULL, '$username', '$password', '$firstName', '$lastName', '$email', '$roleId'); ");

$stmt->execute();

header("Location: index.php");
?>
