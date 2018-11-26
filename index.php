<?php
include_once 'shared/header.php';
require_once 'database.php';
?>
<link rel="stylesheet" href="<?= ROOT_URI ?>css/main.css">
<body style="float: right; margin-right: 3%;" class="bg-grey">
<main class="text-dark">
  <form  style="float: right;" action="" method="post">
      <label for="sort text-darkgreen">Sort by</label>
      <select id="sort" name="sort" class="pulldownbox">
          <option value="date">Expiry Date</option>
          <option value="category">Category</option>
      </select>
      <button class="btn-green">Go</button>
  </form>
  <br>
    <h1 class="text-green">My Food</h1>

      <hr />

    <div style="display: inline-block;">
        <h2 class="text-green">This week</h2>
    </div>


        <div class="foodcontainer">
            <hr class="redline">
              <div class="leftfoodcontainer">
            <img src="" alt="food category">
              </div>
              <div ="rightfoodcontainer">
                <h3 class="text-dark" style="margin: 0px;">Bananas</h3>

                  <hr style="display: inline-block; margin: -3px;" class="containerhr">

                  <p class="text-dark" style="display: inline-block; margin: 0px;">1 day(s) left</p>

                  <br>
                  <br>
                  <button class="btn-action" style="display: inline-block;">Action</button>
              </div>
              <br>
                  <div style="display: inline-block;" class="foodcontainerbuttons">
                    <p style="display: inline;">Eat</p>
                    <p style="display: inline;">Toss</p>
                    <p style="display: inline;">Delete</p>
                  </div>

        </div>


</main>
</body>
<div style="float: left;">
<?php
include_once 'shared/sidebar.php';
include_once 'shared/footer.php';
?>
</div>
