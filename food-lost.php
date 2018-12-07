<?php
session_start();
$style = "css/main.css";
include_once 'shared/head.php';
include_once 'shared/sidebar.php';
if ($_SESSION['logged-in'] === true) {
    $userId = $_SESSION['id'];
    require_once 'process-read-userfood.php';
?>
<div id="main-container">
<?php
include_once 'shared/header.php'
?>

<main class="text-dark">
    <h1 class="text-green">Food Wasted</h1>
    <form action="" method="post" id="sort-form">
        <label for="sort" class="text-darkgreen">Sort by</label>
        <select id="sort" name="sort">
            <option value="name">Name</option>
            <option value="category">Category</option>
        </select>
        <button class="btn-grey">Go</button>
    </form>
    <hr />
    <section>
            <?php
                foreach ($results as $item) {
                    $duration = ($item["customDuration"])? $item["customDuration"] : $item["duration"];
                    $expireDate = calculateExpiryDate($item["date"], $duration);
                    if(($expireDate < 0) || ($item["foodState"] === "toss")) {
            ?>
            <div class="item item-red">
                <img src="<?= $item['image'] ?>" alt="food" class="item-image item-image-red">
                <div class="item-details">
                    <h3 class="item-title text-danger"><?= ($item["customFoodName"])? $item["customFoodName"] : $item["foodName"] ?></h3>
                    <div class="hide item-options">
                        <div>Edit</div>
                        <div>Delete</div>
                    </div>
                </div>
            </div>
        <?php
                    }
                }
        ?>
    </section>
    <script src="js/main.js"></script>
</main>
</div>
</div>
<?php
include_once 'shared/footer.php';
} else {
	header("Location: welcome.php");
}
?>
