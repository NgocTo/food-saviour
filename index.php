<?php
$style = "css/main.css";
include_once 'shared/head.php';
include_once 'shared/sidebar.php';
// var_dump($_SESSION);
// if ($_SESSION['logged-in'] === true) {

$_SESSION['userId'] = 1;
require_once 'process-read-userfood.php';

?>
<div id="main-container">
<?php
include_once 'shared/header.php'
?>

<main class="text-dark">
    <h1 class="text-green">My Food</h1>
    <form action="" method="post" id="sort-form">
        <label for="sort" class="text-darkgreen">Sort by</label>
        <select id="sort" name="sort">
            <option value="date">Expiry Date</option>
            <option value="category">Category</option>
        </select>
        <button class="btn-grey">Go</button>
    </form>
    <hr />
    <section>
        <h2 class="text-green">This week</h2>
            <?php
                foreach ($results as $item) {
                    $duration = ($item["customDuration"])? $item["customDuration"] : $item["duration"];
                    if ($duration < 7) {
            ?>
            <div class="item item-red">
                <img src="<?= $item['image'] ?>" alt="food" class="item-image item-image-red">
                <div class="item-details">
                    <h3 class="item-title item-title-main"><?= ($item["customFoodName"])? $item["customFoodName"] : $item["foodName"] ?></h3>
                    <div class="hide item-options">
                        <div>Edit</div>
                        <div>Delete</div>
                    </div>
                    <p class="item-time"><?= $duration ?> day(s) left</p>
                </div>
                <div class="item-action">
                    <button class="btn-grey item-action-btn">Action</button>
                    <div class="hide action-options">
                        <div id="eat">Eat</div>
                        <div id="toss">Toss</div>
                    </div>
                </div>
            </div>
        <?php
                    }
                }
        ?>
    </section>
    <hr />

    <section>
        <h2 class="text-green">Next week</h2>
            <?php
                foreach ($results as $item) {
                    $duration = ($item["customDuration"])? $item["customDuration"] : $item["duration"];
                    if (($duration  >= 7) && ($duration  < 30)) {
            ?>
            <div class="item item-yellow">
                <img src="<?= $item['image'] ?>" alt="food" class="item-image item-image-yellow">
                <div class="item-details">
                    <h3 class="item-title item-title-main"><?= ($item["customFoodName"])? $item["customFoodName"] : $item["foodName"] ?></h3>
                    <div class="hide item-options">
                        <div>Edit</div>
                        <div>Delete</div>
                    </div>
                    <p class="item-time"><?= $duration  ?> day(s) left</p>
                </div>
                <div class="item-action">
                    <button class="btn-grey item-action-btn">Action</button>
                    <div class="hide action-options">
                        <div id="eat">Eat</div>
                        <div id="toss">Toss</div>
                    </div>
                </div>
            </div>
        <?php
                    }
                }
        ?>
    </section>
    <hr />

    <section>
        <h2 class="text-green">Next month</h2>
            <?php
                foreach ($results as $item) {
                    $duration = ($item["customDuration"])? $item["customDuration"] : $item["duration"];
                    if ($duration >= 30) {
            ?>
            <div class="item item-green">
                <img src="<?= $item['image'] ?>" alt="food" class="item-image item-image-green">
                <div class="item-details">
                    <h3 class="item-title item-title-main"><?= ($item["customFoodName"])? $item["customFoodName"] : $item["foodName"] ?></h3>
                    <div class="hide item-options">
                        <div>Edit</div>
                        <div>Delete</div>
                    </div>
                    <p class="item-time"><?= $duration ?> day(s) left</p>
                </div>
                <div class="item-action">
                    <button class="btn-grey item-action-btn">Action</button>
                    <div class="hide action-options">
                        <div id="eat">Eat</div>
                        <div id="toss">Toss</div>
                    </div>
                </div>
            </div>
        <?php
                    }
                }
        ?>
    </section>
    <hr />
    <!--add food pop-up form-->
    <div class="form-popup hide bg-white" id= "addfood">
        <form action="/action_page.php" class="form-container">
        <h3>Quick Entry:</h3>
        <div>
        <label for="foodName"><b>Food Name</b></label>
        <input type="text" id="foodName" name="foodName" required>
        </div>
        <div>
        <label for="customDuration"><b>Duration</b></label>
        <input type="number" placeholder="5" name="customDuration" required> <span>date(s)</span>
    </div>
        <div>
        <label for="customAmount"><b>Amount</b></label>
        <input type="number" placeholder="1" name="customAmount" required>
        </div>
        <button type="submit" class="btn">Add</button>
        <button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>
    <script src="js/main.js"></script>

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
