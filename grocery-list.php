<?php
$style = "css/main.css";
include_once 'shared/head.php';
include_once 'shared/sidebar.php';
require_once 'read.php';
$_SESSION['userId'] = 1;
require_once('database.php');
?>
<div id="main-container">
<?php
include_once 'shared/header.php';
$stmt = $pdo->prepare("SELECT * FROM `food`");
$stmt->execute();
$food = $stmt->fetchAll();
?>
<main class="text-dark">
    <h1 class="text-green">Grocery Store</h1>
    <form action="" method="post" id="sort-form">
        <label for="sort" class="text-darkgreen">Sort by</label>
        <select id="sort" name="sort" class="pulldownbox">
            <option value="name">Name</option>
            <option value="category">Category</option>
            <option value="expiry">Date Expired</option>
        </select>
        <button class="btn-green">Go</button>
    </form>
    <form action="" method="post" id="grocery-search">
        <input type="text" placeholder="Search food in grocery list..." />
        <button>Search</button>
    </form>
    <table class="grocery-table">
        <thead>
            <tr>
                <th class="text-green">Items</th>
                <th class="text-green">Category</th>
                <th class="text-green">Amount</th>
                <th class="text-green">Date Bought</th>
                <th class="text-green">Date Expired</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($food as $row) {
            ?>
            <tr>
                <td><?= $row["foodName"] ?></td>
                <td><?= $row["categoryId"] ?></td>
                <td>
                    <form action="" method="post" id="userAddFood">
                        <select name="amount" class="pulldownbox">
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
                    </form>
                </td>
                <td>
                    <form action="" method="post" id="userAddDate">
                        <input name="dateBought" class="pulldownbox" type="date" value="<?= date("Y-m-d") ?>">
                    </form>
                </td>
                <td><?= $row["duration"] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</main>
</div>
<?php
include_once 'shared/footer.php';
?>
</div>
