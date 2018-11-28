<aside>
    <h2 class="hidden">Sidebar</h2>
    <img src="" alt="food saviour logo" class="centerall" />
    <form action="" method="post" class="centerform">
        <label for="add" class="hidden">Add new item: </label>
        <input type="text" id="add" name="add" placeholder="Quick Entry" class="inputbox"/>
        <button><i class="fas fa-plus"></i><span class="hidden">Add</span></button>
    </form>
    <nav>
        <h3 class="hidden">Navigation</h3>


        <ul>
          <li class="block"><a href="<?= ROOT_URI ?>index.php">My Food</a></li>
          <li class="block"><a href="<?= ROOT_URI ?>food-saved.php">Food Saved</a></li>
          <li class="block"><a href="<?= ROOT_URI ?>food-lost.php">Food Lost</a></li>
          <li class="block"><a href="<?= ROOT_URI ?>grocery-list.php">Grocery List</a></li>
        </ul>

    </nav>
    <section id="footer">
        <h2 class="hidden">Terms and Condition</h2>
        <p>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms &amp; Condition</a>
        </p>
        <p>© The Breakfast Club <?= date("Y"); ?></p>
    </section>
</aside>
