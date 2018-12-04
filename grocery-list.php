<?php
$style = "css/main.css";
session_start();
include_once 'shared/head.php';
include_once 'shared/sidebar.php';
require_once 'read.php';
$_SESSION['userId'] = 1;
?>
<div id="main-container">
<?php
include_once 'shared/header.php'
?>
<main class="text-dark">
    <h1 class="text-green">Grocery List</h1>
    <form action="" method="post" id="sort-form">
        <label for="sort" class="text-darkgreen">Sort by</label>
        <select id="sort" name="sort" class="pulldownbox">
            <option value="amount">Amount</option>
            <option value="bought">Date Bought</option>
            <option value="expiry">Date Expired</option>
        </select>
        <button class="btn-green">Go</button>
    </form>
    <form action="" method="post" id="grocery-search">
        <input type="text" placeholder="Search food in grocery list..." />
        <button>Search</button>
    </form>
    <?php
        if($_SESSION['userId'] != 1){
            // table is empty logic
        }else if($_SESSION['userId'] == 1){
            // add login stuff once done
    ?>
    <table class="grocery-table">
        <thead>
            <th class="text-green">Items</th>
            <th class="text-green">Amount</th>
            <th class="text-green">Date Bought</th>
            <th class="text-green">Date Expired</th>
        </thead>
        <tr>
            <td>test<?php ("SELECT `foodId` FROM `userfood` WHERE `userId` = 1"); ?></td>
            <td>test<?php ("SELECT `amount` FROM `userfood`WHERE `userId` = 1"); ?></td>
            <td>test<?php ("SELECT `date` FROM `userfood` WHERE `userId` = 1"); ?></td>
            <td>test<?php ("SELECT `food`.`duration`, `userfood`.`foodId` FROM `food` JOIN `userfood` ON `userfood`.`foodId` = `food`.`id`") ?></td>
        </tr>
        <tr>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
        </tr>
        <tr>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
        </tr>
        <tr>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
        </tr>
    </table>
    <?php
        }
    ?>
</main>
</div>
<?php
include_once 'shared/footer.php';
?>
</div>
