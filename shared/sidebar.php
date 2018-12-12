<aside>
    <h2 class="hidden">Sidebar</h2>
    <a href="<?= ROOT_URI ?>"><img src="<?= ROOT_URI ?>img/logo.png" id="logo" alt="food saviour logo" /></a>
    <div>
        <label for="add-search" class="hidden">Add new item: </label>
        <input type="text" id="add-search" name="add-search" autocomplete="off" placeholder="Quick Entry" class="inputbox"/>
        <button id="add-btn" class="btn-grey"><i class="fas fa-plus"></i><span class="hidden">Add</span></button>
        <ul id="searchContainer">
        </ul>
        <script src="<?= ROOT_URI ?>js/sidebar.js"></script>
    </div>
    <nav>
        <h3 class="hidden">Navigation</h3>
        <ul>
          <li class="block"><a href="<?= ROOT_URI ?>index.php">My Food</a></li>
          <li class="block"><a href="<?= ROOT_URI ?>food-saved.php">Food Saved</a></li>
          <li class="block"><a href="<?= ROOT_URI ?>food-lost.php">Food Lost</a></li>
          <li class="block"><a href="<?= ROOT_URI ?>grocery-store.php">Grocery Store</a></li>
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
<!--add food pop-up form-->
<div class="form-popup hide bg-white" id="addfood">
    <form action="process-add-userfood.php" method="post" class="form-container">
        <h3 class="popup-title text-green text-center">Quick Entry</h3>
        <div>If you are adding a common food, please leave duration and amount empty to get the default.</div>
        <div class="form-inputs">
            <label for="foodName"><b>Food Name</b></label>
            <input type="text" id="foodName" name="foodName" placeholder="Enter food name..." required>
        </div>
        <div class="form-inputs">
            <label for="dateBought"><b>Date Bought</b></label>
            <input name="dateBought" id="dateBought" type="date" value="<?= date("Y-m-d") ?>">
        </div>
        <div class="form-inputs">
            <label for="customDuration"><b>Duration</b></label>
            <input type="text" placeholder="Enter custom duration..." name="customDuration"><span>date(s)</span>
        </div>
        <div class="form-inputs">
            <label for="customAmount"><b>Amount</b></label>
            <input type="text" name="customAmount" placeholder="1">
        </div>
        <div class="popup-group-btn">
            <button type="submit" class="btn-outline popup-btn">Add</button>
            <div class="btn-outline popup-btn" onclick="closeAddForm()">Close</div>
        </div>
    </form>
</div>
