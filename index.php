<?php
include_once 'shared/header.php';
require_once 'database.php';
?>
<main class="text-dark">
    <h1>My Food</h1>
    <form action="" method="post">
        <label for="sort">Sort by</label>
        <select id="sort" name="sort">
            <option value="date">Expiry Date</option>
            <option value="category">Category</option>
        </select>
        <button>Go</button>
    </form>

    <div>
        <h2>This week</h2>
        <div>
            <img src="" alt="food category">
            <h3>Bananas</h3>
            <p>1 day(s) left</p>
            <button class="btn-grey">Action</button>
            <div>
                <p>Eat</p>
                <p>Toss</p>
            </div>
        </div>
    </div>
    <hr />
</main>
<?php
include_once 'shared/sidebar.php';
include_once 'shared/footer.php';
?>
