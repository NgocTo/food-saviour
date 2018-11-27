<?php
include_once 'shared/head.php';
require_once 'database.php';
include_once 'shared/sidebar.php';
?>
<div id="main-container">
<?php
include_once 'shared/header.php'
?>

<main class="text-dark">
    <h1 class="text-green">My Food</h1>
    <form action="" method="post" id="sort-form">
        <label for="sort" class="text-darkgreen">Sort by</label>
        <select id="sort" name="sort" class="pulldownbox">
            <option value="date">Expiry Date</option>
            <option value="category">Category</option>
        </select>
        <button class="btn-green">Go</button>
    </form>
    <hr />
    <div>
        <h2 class="text-green">This week</h2>
        <div class="item item-danger">
            <img src="img/banana.svg" alt="food" class="item-image">
            <div class="item-details">
                <h3 class="item-title">Bananas</h3>
                <p class="item-time">1 day(s) left</p>
            </div>
            <div class="item-action">
                <button class="btn-grey item-action-btn">Action</button>
                <div class="hide item-options">
                    <div>Eat</div>
                    <div>Toss</div>
                </div>
            </div>
        </div>

        <div class="item item-danger">
        <img src="img/banana.svg" alt="food" class="item-image">
            <div class="item-details">
                <h3 class="item-title">Bananas</h3>
                <p class="item-time">1 day(s) left</p>
            </div>
            <div class="item-action">
                <button class="btn-grey item-action-btn">Action</button>
                <div class="hide item-options">
                    <div>Eat</div>
                    <div>Toss</div>
                </div>
            </div>
        </div>
        <div class="item item-danger">
        <img src="img/banana.svg" alt="food" class="item-image">
            <div class="item-details">
                <h3 class="item-title">Bananas</h3>
                <p class="item-time">1 day(s) left</p>
            </div>
            <div class="item-action">
                <button class="btn-grey item-action-btn">Action</button>
                <div class="hide item-options">
                    <div>Eat</div>
                    <div>Toss</div>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <script src="js/main.js"></script>
</main>
</div>
<?php
include_once 'shared/footer.php';
?>
</div>
