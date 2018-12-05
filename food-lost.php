<?php
$style = "css/main.css";
include_once 'shared/head.php';
include_once 'shared/sidebar.php';
// var_dump($_SESSION);
// if ($_SESSION['logged-in'] === true) {

$_SESSION['userId'] = 1;
require_once 'process-read-toss.php';

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
            ?>
            <div class="item item-green">
                <img src="<?= $item['image'] ?>" alt="food" class="item-image item-image-green">
                <div class="item-details">
                    <h3 class="item-title"><?= ($item["customFoodName"])? $item["customFoodName"] : $item["foodName"] ?></h3>
                    <div class="hide item-options">
                        <div>Edit</div>
                        <div>Delete</div>
                    </div>
                </div>
            </div>
        <?php

                }
        ?>
    </section>

</main>
</div>
<?php
include_once 'shared/footer.php';
?>
</div>
<?php
// } else {
	// header("Location: welcome.php");
// }
?>
