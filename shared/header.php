<header>
    <form id="search-form" action="" method="post">
        <label class="hidden" for="search">Search: </label>
        <input type="text" id="search" name="search" placeholder="Type in to search"/>
        <button class="btn-grey"><span class="hidden">Search</span><i class="fas fa-search"></i></button>
    </form>
    <ul id="header-nav">
        <li><a href="<?= ROOT_URI ?>">
            <i class="fas fa-home" title="Home"></i>
            <span class="hidden">Home</span>
        </a></li>
        <li><a href="#"><i class="fas fa-cog" title="Settings"></i><span class="hidden">Settings</span></a>
            <ul>
                <li><a href="<?= ROOT_URI ?>process-logout.php">Logout</a></li>
                <li><a href="<?= ROOT_URI ?>settings.php">Settings</a></li>
            </ul>
        </li>
    </ul>
</header>
