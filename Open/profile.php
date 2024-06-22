<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MASA-BLOG | Profile</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="img/Img_City.jpg" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold"><?php echo $_SESSION['name'] ?></strong>
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
                    <li>
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="artikel.php"><i class="fa fa-edit"></i> <span class="nav-label">Posts</span></a>
                    </li>
                    <li>
                        <a href="basic_gallery.php"><i class="fa fa-photo"></i> <span class="nav-label">Media</span></a>
                    </li>
                    <li>
                        <a href="pages.php"><i class="fa fa-file"></i> <span class="nav-label">Pages</span></a>
                    </li>

                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
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
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Profile</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a>Extra Pages</a>
                        </li>
                        <li class="active">
                            <strong>Profile</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row animated fadeInRight">
                    <div class="col-md-4">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Profile Detail</h5>
                            </div>
                            <div>
                                <div class="ibox-content no-padding border-left-right">
                                    <img alt="image" class="img-responsive" src="img/Img_City.jpg">
                                </div>
                                <div class="ibox-content profile-content">
                                    <h4><strong>Nandito Prasetyo</strong></h4>
                                    <p><i class="fa fa-map-marker"></i> UIN Maulana Malik Ibrahim Malang</p>
                                    <h5>
                                        Tentang saya
                                    </h5>
                                    <p>
                                        Saya merupakan admin yang sedang merancang karir saya dalam mengatur tulisan
                                        blog dalam MASA-BLOG ini.
                                    </p>
                                    <div class="row m-t-lg">
                                        <div class="col-md-4">
                                            <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                            <h5><strong>16,900</strong> Posts</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                            <h5><strong>28</strong> Following</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                            <h5><strong>24,000</strong> Followers</h5>
                                        </div>
                                    </div>
                                    <div class="user-button">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                        class="fa fa-envelope"></i> Send a Message</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-default btn-sm btn-block"><i
                                                        class="fa fa-pencil"></i> Change Your Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Activites</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <li><a href="#">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">

                                <div>
                                    <div class="feed-activity-list">

                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/a1.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right text-navy">1m ago</small>
                                                <strong>Sandra Momot</strong> started following <strong>Nandito
                                                    Prasetyo</strong>. <br>
                                                <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                                <div class="actions">
                                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like
                                                    </a>
                                                    <a class="btn btn-xs btn-danger"><i class="fa fa-heart"></i>
                                                        Love</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/Img_City.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">5m ago</small>
                                                <strong>Nandito Prasetyo</strong> posted a new blog. <br>
                                                <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/a2.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">2h ago</small>
                                                <strong>Mark Johnson</strong> posted message on <strong>Nandito
                                                    Prasetyo</strong> site. <br>
                                                <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                                <div class="well">
                                                    Postingan kamu sangat hebat! Saya jadi ingin seperti anda.
                                                </div>
                                                <div class="pull-right">
                                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like
                                                    </a>
                                                    <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                                    <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                        Message</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/a3.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">2h ago</small>
                                                <strong>Janet Rosowski</strong> add 1 photo on <strong>Nandito
                                                    Prasetyo</strong>. <br>
                                                <small class="text-muted">2 days ago at 8:30am</small>
                                                <div class="photos">
                                                    <a target="_blank"
                                                        href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg">
                                                        <img alt="image" class="feed-photo" src="img/p1.jpg"></a>
                                                    <a target="_blank"
                                                        href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg">
                                                        <img alt="image" class="feed-photo" src="img/p3.jpg"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/a4.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right text-navy">5h ago</small>
                                                <strong>Chris Johnatan Overtunk</strong> started following
                                                <strong>Nandito Prasetyo</strong>. <br>
                                                <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                                <div class="actions">
                                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like
                                                    </a>
                                                    <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/a5.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">2h ago</small>
                                                <strong>Kim Smith</strong> posted message on <strong>Nandito
                                                    Prasetyo</strong> site. <br>
                                                <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                                <div class="well">
                                                    Postingan kamu sangat hebat! Saya jadi ingin seperti anda.
                                                </div>
                                                <div class="pull-right">
                                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/Img_City.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">23h ago</small>
                                                <strong>Nandito Prasetyo</strong> love <strong>Kim Smith</strong>. <br>
                                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <a href="#" class="pull-left">
                                                <img alt="image" class="img-circle" src="img/a7.jpg">
                                            </a>
                                            <div class="media-body ">
                                                <small class="pull-right">46h ago</small>
                                                <strong>Mike Loreipsum</strong> started following <strong>Nandito
                                                    Prasetyo</strong>. <br>
                                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show
                                        More</button>

                                </div>

                            </div>
                        </div>

                    </div>
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
    </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Peity -->
    <script src="js/demo/peity-demo.js"></script>

</body>

</html>