<?php
session_start();
$style = "css/main.css";
include_once 'shared/head.php';
include_once 'shared/sidebar.php';
if ($_SESSION['logged-in'] === true) {
    $userId = $_SESSION['id'];
require_once 'process-read-food.php';
?>
<div id="main-container">
<?php
include_once 'shared/header.php';
?>
<main class="text-dark">
    <h1 class="text-green">Grocery Store</h1>
    <form action="" method="post" id="sort-form">
        <label for="sort" class="text-darkgreen">Sort by</label>
        <select id="sort" name="sort" class="pulldownbox">
            <option value="name">Name</option>
            <option value="category">Category</option>
            <option value="expiry">Expiry Date</option>
        </select>
        <button class="btn-green">Go</button>
    </form>

    <hr />

    <form action="" method="post" id="grocery-search">
        <input type="text" placeholder="Search food in grocery list..." />
        <button class="btn-green">Search</button>
    </form>
    <table class="grocery-table">
        <thead>
            <tr>
                <th class="text-green">Items</th>
                <th class="text-green">Category</th>
                <th class="text-green">Amount</th>
                <th class="text-green">Date Bought</th>
                <th class="text-green">Duration</th>
                <th class="text-green">Add Item</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($food as $row) {
            ?>
            <form action="process-add-userfood-grocery.php" method="post" >
                <input type="hidden" name="foodkey" id="foodkey" value=<?= $row['foodkey'] ?> />
                <tr>
                    <td><?= $row["foodName"] ?></td>
                    <td><?= $row["category"] ?></td>
                    <td>
                        <select name="customAmount" id="customAmount">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </td>
                    <td>
                        <input name="dateBought" id="dateBought" type="date" value="<?= date("Y-m-d") ?>">
                    </td>
                    <td>
                        <input name="customDuration" id="customDuration" type="text" value="<?= $row["duration"] ?>">
                    </td>
                    <td><button class="btn-outline" name="button">+</button></td>
                </tr>
            </form>
            <?php } ?>
        </tbody>
    </table>
</main>
</div>
<?php
include_once 'shared/footer.php';
} else {
	header("Location: welcome.php");
}
?>
