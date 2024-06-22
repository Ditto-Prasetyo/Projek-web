<?php
session_start();
$_SESSION['page'] = 'pages';
include "../Config/config.php";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASA-BLOG | Pages</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <?php include 'sidebar.php'; ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Welcome to MASA-BLOG!</span>
                        </li>
                        <li>
                            <a href="login.php">
                                <i class="fa fa-sign-out"></i> Keluar
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row border-bottom white-bg dashboard-header">
                <h2>Pages</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">
                        <strong><a href="pages.php">pages</a></strong>
                    </li>
                </ol>
            </div>
            <div class="wrapper wrapper-content">
                <?php
                $sql = "SELECT * FROM posts";
                $sql2 = "SELECT * FROM kategori";
                $sql3 = "SELECT * FROM authors";
                $query = mysqli_query($conn, $sql);
                $query2 = mysqli_query($conn, $sql2);
                $query3 = mysqli_query($conn, $sql3);
                $count = mysqli_num_rows($query);
                $count2 = mysqli_num_rows($query2);
                $count3 = mysqli_num_rows($query3);
                // Fetch or initialize page content
                $pages = [
                    ['title' => 'Jumlah Artikel', 'content' => 'Page ini berisi mengenai jumlah artikel yang ada = ' . $count . ' artikel'],
                    ['title' => 'Profile', 'content' => 'Page ini mengarahkan kepada profile anda.'],
                    ['title' => 'Kategori', 'content' => 'Page ini mengarahkan kepada kategori artikel = ' . $count2 . ' kategori'],
                    ['title' => 'Penulis', 'content' => 'Page ini mengarahkan kepada para penulis = ' . $count3 . ' author']
                ];
                ?>
                <div class="list-group">
                    <?php foreach ($pages as $page): ?>
                        <a href="<?php
                        if ($page['title'] === 'Profile') {
                            echo 'profile.php';
                        } elseif ($page['title'] === 'Kategori') {
                            echo 'kategori.php';
                        } elseif ($page['title'] === 'Penulis') {
                            echo 'penulis.php';
                        } else {
                            echo 'artikel.php';
                        }
                        ?>" class="list-group-item">
                            <h4 class="list-group-item-heading"><?php echo $page['title']; ?></h4>
                            <p class="list-group-item-text"><?php echo $page['content']; ?></p>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> MASA Company &copy; 2004-2024
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="animated">
            <?php include 'navbar.php'; ?>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

    <script src="../js/dashboard.js"></script>
</body>

</html>