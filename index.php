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
            $amount = ($row["customAmount"] === null || $row["customAmount"] === 0)? "1" : $row["customAmount"];
            $expireDate = calculateExpiryDate($row["date"], $duration);
            if (($expireDate < 2) && ($expireDate >= 0) && ($row["foodState"] === null)) {
        ?>
        <div class="text-danger">
            <?= ($row["customFoodName"])? $row["customFoodName"] : $row["foodName"] ?> (x<?= $amount ?>) is expiring soon!
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
                    $amount = ($item["customAmount"] === null || $item["customAmount"] === 0)? "1" : $item["customAmount"];
                    $expireDate = calculateExpiryDate($item["date"], $duration);
                    if (($expireDate >= 0) && ($expireDate < 7) && ($item["foodState"] === null)) {
            ?>
            <div class="item item-red">
                <img src="<?= $item['image'] ?>" alt="food" class="item-image item-image-red">
                <div class="item-details">
                    <h3 class="item-title item-title-main"><?= ($item["customFoodName"])? $item["customFoodName"] : $item["foodName"] ?> <span class="item-amount">(x<?= $amount ?>)</span></h3>
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
                    $amount = ($item["customAmount"] === null || $item["customAmount"] === 0)? "1" : $item["customAmount"];
                    $expireDate = calculateExpiryDate($item["date"], $duration);
                    if (($expireDate  >= 7) && ($expireDate  < 30) && ($item["foodState"] === null)) {
            ?>
            <div class="item item-yellow">
                <img src="<?= $item['image'] ?>" alt="food" class="item-image item-image-yellow">
                <div class="item-details">
                    <h3 class="item-title item-title-main"><?= ($item["customFoodName"])? $item["customFoodName"] : $item["foodName"] ?> <span class="item-amount">(x<?= $amount ?>)</span></h3>
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
                    $amount = ($item["customAmount"] === null || $item["customAmount"] === 0)? "1" : $item["customAmount"];
                    $expireDate = calculateExpiryDate($item["date"], $duration);
                    if (($expireDate >= 30) && ($item["foodState"] === null)) {
            ?>
            <div class="item item-green">
                <img src="<?= $item['image'] ?>" alt="food" class="item-image item-image-green">
                <div class="item-details">
                    <h3 class="item-title item-title-main"><?= ($item["customFoodName"])? $item["customFoodName"] : $item["foodName"] ?> <span class="item-amount">(x<?= $amount ?>)</span></h3>
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
    <!--edit food pop-up form-->
    <div class="form-popup hide bg-white" id="editfood">
        <form action="process-edit-userfood.php" method="post" class="form-container">
            <h2 class="popup-title text-green text-center">Edit Entry</h2>
            <input type="hidden" id="edit-id" name="edit-id" />
            <div class="form-inputs">
                <label for="edit-foodName"><b>Food Name</b></label>
                <input type="text" id="edit-foodName" name="edit-foodName" required>
            </div>
            <div class="form-inputs">
                <label for="edit-dateBought"><b>Date Bought</b></label>
                <input name="edit-dateBought" id="edit-dateBought" type="date">
            </div>
            <div class="form-inputs">
                <label for="edit-customDuration"><b>Duration</b></label>
                <input type="text" id="edit-customDuration" name="edit-customDuration"> <span>date(s)</span>
            </div>
            <div class="form-inputs">
                <label for="edit-customAmount"><b>Amount</b></label>
                <input type="text" id="edit-customAmount" name="edit-customAmount">
            </div>
            <div class="popup-group-btn">
                <button type="submit" class="btn-outline popup-btn">Update</button>
                <div class="btn-outline popup-btn" onclick="closeEditForm()">Close</div>
            </div>
        </form>
    </div>
    <script src="js/main.js"></script>

</main>
</div>
<?php
include_once 'shared/footer.php';
} else {
	header("Location: welcome.php");
}
?>
