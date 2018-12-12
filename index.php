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
        <?php
        foreach($results as $row) {
            $duration = ($row["customDuration"])? $row["customDuration"] : $row["duration"];
            $expireDate = calculateExpiryDate($row["date"], $duration);
            if (($expireDate < 2) && ($expireDate >= 0) && ($row["foodState"] === null)) {
        ?>
        <div class="text-danger">
            <?= ($row["customFoodName"])? $row["customFoodName"] : $row["foodName"] ?> is expiring soon!
            <a href="https://www.allrecipes.com/search/results/?wt=<?= ($row["customFoodName"])? $row["customFoodName"] : $row["foodName"] ?>" target="_blank" class="text-danger">Check out recipe ideas here.</a>
        </div>
        <?php
            }
        }
        ?>
    </section>
    <section>
        <h2 class="text-green">This week</h2>
            <?php
                foreach ($results as $item) {
                    $duration = ($item["customDuration"])? $item["customDuration"] : $item["duration"];
                    $expireDate = calculateExpiryDate($row["date"], $duration);
                    if (($expireDate >= 0) && ($expireDate < 7) && ($item["foodState"] === null)) {
            ?>
            <div class="item item-red">
                <img src="<?= $item['image'] ?>" alt="food" class="item-image item-image-red">
                <div class="item-details">
                    <h3 class="item-title item-title-main"><?= ($item["customFoodName"])? $item["customFoodName"] : $item["foodName"] ?></h3>
                    <div class="hide item-options">
                        <div onclick="showEditPopup(<?= $item['userFoodId'] ?>)"><div class="link-imitate">Edit</div></div>
                        <div><a class="link-imitate" href="process-delete-userfood.php?id=<?= $item['userFoodId'] ?>">Delete</a></div>
                    </div>
                    <p class="item-time"><?= $expireDate ?> day(s) left</p>
                </div>
                <div class="item-action">
                    <button class="btn-grey item-action-btn">Action</button>
                    <div class="hide action-options">
                        <form action="process-edit-eat-toss.php" method="post">
                            <input type="hidden" name="foodId" value="<?= $item['foodId'] ?>" />
                            <input type="hidden" name="userId" value="<?= $userId ?>" />
                            <button id="eat" name="foodState" value="eat">Eat</button>
                            <button id="toss" name="foodState" value="toss">Toss</button>
                        </form>
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
                    $expireDate = calculateExpiryDate($row["date"], $duration);
                    if (($expireDate  >= 7) && ($expireDate  < 30) && ($item["foodState"] === null)) {
            ?>
            <div class="item item-yellow">
                <img src="<?= $item['image'] ?>" alt="food" class="item-image item-image-yellow">
                <div class="item-details">
                    <h3 class="item-title item-title-main"><?= ($item["customFoodName"])? $item["customFoodName"] : $item["foodName"] ?></h3>
                    <div class="hide item-options">
                        <div onclick="showEditPopup(<?= $item['userFoodId'] ?>)"><div class="link-imitate">Edit</div></div>
                        <div><a class="link-imitate" href="process-delete-userfood.php?id=<?= $item['userFoodId'] ?>">Delete</a></div>
                    </div>
                    <p class="item-time"><?= $expireDate  ?> day(s) left</p>
                </div>
                <div class="item-action">
                    <button class="btn-grey item-action-btn">Action</button>
                    <div class="hide action-options">
                        <form action="process-edit-eat-toss.php" method="post">
                            <input type="hidden" name="foodId" value="<?= $item['foodId'] ?>" />
                            <input type="hidden" name="userId" value="<?= $userId ?>" />
                            <button id="eat" name="foodState" value="eat">Eat</button>
                            <button id="toss" name="foodState" value="toss">Toss</button>
                        </form>
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
                    $expireDate = calculateExpiryDate($row["date"], $duration);
                    if (($expireDate >= 30) && ($item["foodState"] === null)) {
            ?>
            <div class="item item-green">
                <img src="<?= $item['image'] ?>" alt="food" class="item-image item-image-green">
                <div class="item-details">
                    <h3 class="item-title item-title-main"><?= ($item["customFoodName"])? $item["customFoodName"] : $item["foodName"] ?></h3>
                    <div class="hide item-options">
                        <div onclick="showEditPopup(<?= $item['userFoodId'] ?>)"><div class="link-imitate">Edit</div></div>
                        <div><a class="link-imitate" href="process-delete-userfood.php?id=<?= $item['userFoodId'] ?>">Delete</a></div>
                    </div>
                    <p class="item-time"><?= $expireDate ?> day(s) left</p>
                </div>
                <div class="item-action">
                    <button class="btn-grey item-action-btn">Action</button>
                    <div class="hide action-options">
                        <form action="process-edit-eat-toss.php" method="post">
                            <input type="hidden" name="foodId" value="<?= $item['foodId'] ?>" />
                            <input type="hidden" name="userId" value="<?= $userId ?>" />
                            <button id="eat" name="foodState" value="eat">Eat</button>
                            <button id="toss" name="foodState" value="toss">Toss</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
                    }
                }
        ?>
    </section>
    <hr />

    <script src="js/main.js"></script>

</main>
</div>
<?php
include_once 'shared/footer.php';
} else {
	header("Location: welcome.php");
}
?>
