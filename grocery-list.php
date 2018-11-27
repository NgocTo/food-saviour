<?php
include_once 'shared/head.php';
include_once 'shared/sidebar.php';
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
            <option value="date">Expiry Date</option>
            <option value="category">Category</option>
        </select>
        <button class="btn-green">Go</button>
    </form>
    <hr />

    <form class="" action="" method="post">
        <label>Search</label>
        <input type="text" />
        <button>Search</button>
    </form>

    <table>
        <thead>
            <th>Items</th>
            <th>Amount</th>
            <th>Date Bought</th>
            <th>Date Expired</th>
        </thead>
        <tr>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
        </tr>
    </table>

</main>
</div>
<?php
include_once 'shared/footer.php';
?>
</div>
