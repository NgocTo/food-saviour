<header>
    <form id="search-form" action="" method="post">
        <label class="hidden" for="search">Search: </label>
        <input type="text" id="search" name="search" placeholder="Type in to search"/>
        <button class="btn-grey"><span class="hidden">Search</span><i class="fas fa-search"></i></button>
    </form>
    <ul id="header-nav">
        <li>
            <a href="<?= ROOT_URI ?>">
                <i class="fas fa-home" title="Home"></i>
                <span class="hidden">Home</span>
            </a>
        </li>
        <li id="setting-btn">
            <a href="<?= ROOT_URI ?>settings-general.php">
                <i class="fas fa-cog" title="Settings"></i>
                <span class="hidden">Settings</span>
            </a>
            <!-- <ul id="dropdownlist" class="hide">
                <li><a href="process-logout.php">Logout</a></li>
                <li><a href="settings-general.php">Settings</a></li>
                remember to put ROOT_URI back in front of href
            </ul> -->
        </li>
    </ul>
</header>
