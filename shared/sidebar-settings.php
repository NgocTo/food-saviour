<aside>
    <h2 class="hidden">Sidebar</h2>
    <a href="<?= ROOT_URI ?>"><img src="<?= ROOT_URI ?>img/logo.png" id="logo" alt="food saviour logo" /></a>
    <div>
        <label for="add-search" class="hidden">Add new item: </label>
        <input type="text" id="add-search" name="add-search" placeholder="Quick Entry" class="inputbox"/>
        <button id="add-btn" class="btn-grey"><i class="fas fa-plus"></i><span class="hidden">Add</span></button>
        <ul id="searchContainer">
        </ul>
        <script src="<?= ROOT_URI ?>js/sidebar.js"></script>
    </div>
    <nav>
        <h3 class="hidden">Navigation</h3>
        <ul>
          <li class="block"><a href="<?= ROOT_URI ?>settings-general.php">General</a></li>
          <li class="block"><a href="<?= ROOT_URI ?>settings-account.php">Account</a></li>
          <li class="block"><a href="<?= ROOT_URI ?>about.php">About</a></li>
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
