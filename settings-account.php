<?php
session_start();
$style = "css/main.css";
include_once 'shared/head.php';
include_once 'shared/sidebar-settings.php';
if ($_SESSION['logged-in'] === true) {
    $userId = $_SESSION['id'];
?>
<div id="main-container">
<?php
include_once 'shared/header.php'
?>

<main class="text-dark">
    <h1 class="text-green">Settings</h1>
    <hr />
    <h2 class="text-green">Account</h2>
    <form action="#" method="POST">
        <div class="form-padding">
            <label for="username">Username: </label>
            <br />
            <input type="text" name="username">
        </div>
        <div class="form-padding">
            <label for="currentPass">Current Password: </label>
            <br />
            <input type="text" name="currentPass">
        </div>
        <div class="form-padding">
            <label for="newPass">New Password: </label>
            <br />
            <input type="text" name="newPass">
        </div>
        <div class="form-padding">
            <label for="newPass">Repeat New Password: </label>
            <br />
            <input type="text" name="newPass">
        </div>
        <div class="form-padding">
            <input type="submit" value="Update Settings" class="btn-green" />
        </div>
    </form>
</main>

</div>
<?php
include_once 'shared/footer.php';
} else {
	header("Location: welcome.php");
}
?>
