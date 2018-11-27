<aside>
    <h2 class="hidden">Sidebar</h2>
    <img src="" alt="food saviour logo" />
    <form action="" method="post">
        <label for="add" class="hidden">Add new item: </label>
        <input type="text" id="add" name="add" placeholder="Quick Entry" />
        <button><i class="fas fa-plus"></i><span class="hidden">Add</span></button>
    </form>
    <nav>
        <h3 class="hidden">Navigation</h3>
        <ul>
            <li><a href="<?= ROOT_URI ?>my-food.php" class="btn">My Food</a></li>
            <li><a href="<?= ROOT_URI ?>food-saved.php" class="btn">Food Saved</a></li>
            <li><a href="<?= ROOT_URI ?>food-lost.php" class="btn">Food Lost</a></li>
            <li><a href="<?= ROOT_URI ?>grocery-list.php" class="btn">Grocery List</a></li>
        </ul>
    </nav>
    <section class="terms-condition">
        <h2 class="hidden">Terms and Condition</h2>
        <p>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms &amp; Condition</a>
        </p>
        <p>© The Breakfast Club <?= date("Y"); ?></p>
    </section>
</aside>
