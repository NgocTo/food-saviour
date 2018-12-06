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
    <h2 class="text-green">General</h2>
    <h3 class="text-green">History</h3>
    <div class="form-padding">
        <a href="#">Clear Fridge History</a>
    </div>
    <form action="#" method="POST">
        <h3 class="text-green">Notifications</h3>
        <div class="form-padding">
            <input type="checkbox" name="notify">
            <label for="notify">One week to expiry</label>
        </div>
        <div class="form-padding">
            <input type="checkbox" name="notify">
            <label for="notify">One month to expiry</label>
        </div>
        <h3 class="text-green">Organization</h3>
        <div class="form-padding">
            <input type="checkbox" name="org">
            <label for="org">Automatically move expired items to trash</label>
        </div>
        <h3 class="text-green">Sort By Default</h3>
        <div class="form-padding">
            <select name="sort" required>
                <option value="category">Category</option>
                <option value="add">Add Date</option>
                <option value="expire">Expiry Date</option>
                <option value="alpha">Alphabetical</option>
            </select>
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
