<?php
$toggle_active = 'class="active"';
$toggle_active_home = '';
$toggle_active_posts = '';
$toggle_active_media = '';
$toggle_active_pages = '';



if ($_SESSION['page'] === 'home') {
    $toggle_active_home = $toggle_active;
    $toggle_active_posts = '';
    $toggle_active_media = '';
    $toggle_active_pages = '';
} else if ($_SESSION['page'] === 'posts') {
    $toggle_active_home = '';
    $toggle_active_posts = $toggle_active;
    $toggle_active_media = '';
    $toggle_active_pages = '';

} else if ($_SESSION['page'] === 'media') {
    $toggle_active_home = '';
    $toggle_active_posts = '';
    $toggle_active_media = $toggle_active;
    $toggle_active_pages = '';
} else if ($_SESSION['page'] === 'pages') {
    $toggle_active_home = '';
    $toggle_active_posts = '';
    $toggle_active_media = '';
    $toggle_active_pages = $toggle_active;
}
?>

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="img/Img_City.jpg" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong
                                    class="font-bold"><?php echo $_SESSION['nama'] ?></strong>
                            </span> <span class="text-muted text-xs block">Logging as :
                                <?php echo $_SESSION['email'] ?> <b class="caret"></b></span> </span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.php">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="login.php">Keluar</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    MASA
                </div>
            </li>
            <li <?php echo $toggle_active_home ?>>
                <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li <?php echo $toggle_active_posts ?>>
                <a href="artikel.php"><i class="fa fa-edit"></i> <span class="nav-label">Posts</span></a>
            </li>
            <li <?php echo $toggle_active_media ?>>
                <a href="basic_gallery.php"><i class="fa fa-photo"></i> <span class="nav-label">Media</span></a>
            </li>
            <li <?php echo $toggle_active_pages ?>>
                <a href="pages.php"><i class="fa fa-file"></i> <span class="nav-label">Pages</span></a>
            </li>
        </ul>
    </div>
</nav>