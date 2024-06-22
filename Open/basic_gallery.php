<?php
session_start();

$_SESSION['page'] = "media";
?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MASA-BLOG | Lightbox Gallery</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

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
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>Media Lightbox</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a>Media</a>
                            </li>
                            <li class="active">
                                <strong>Media Lightbox</strong>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
                <div class="wrapper wrapper-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">

                                <div class="ibox-content">

                                    <h2>Gambar Media Lightbox</h2>
                                    <p>
                                        <strong>Media blueimp</strong> adalah gambar dan video galeri, carousel, dan
                                        lightbox yang mendukung sentuhan, responsif, dan dapat disesuaikan, dioptimalkan
                                        untuk browser web seluler dan desktop. Ini menampilkan navigasi gesek, mouse dan
                                        keyboard, efek transisi, fungsionalitas tayangan slide, dukungan layar penuh,
                                        dan pemuatan konten sesuai permintaan dan dapat diperluas untuk menampilkan
                                        jenis konten tambahan. Untuk dokumentasi lengkapnya dapat anda temukan di sini:
                                        <a href="https://github.com/blueimp/Gallery/blob/master/README.md"
                                            target="_blank">https://github.com/blueimp/Gallery/blob/master/README.md</a>
                                    </p>

                                    <div class="lightBoxGallery">
                                        <a href="img/gallery/1.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/1s.jpg"></a>
                                        <a href="img/gallery/2.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/2s.jpg"></a>
                                        <a href="img/gallery/3.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/3s.jpg"></a>
                                        <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/4s.jpg"></a>
                                        <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/5s.jpg"></a>
                                        <a href="img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/6s.jpg"></a>
                                        <a href="img/gallery/7.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/7s.jpg"></a>
                                        <a href="img/gallery/8.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/8s.jpg"></a>
                                        <a href="img/gallery/9.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/9s.jpg"></a>
                                        <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/10s.jpg"></a>
                                        <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/12s.jpg"></a>
                                        <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/4s.jpg"></a>
                                        <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/5s.jpg"></a>
                                        <a href="img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/6s.jpg"></a>
                                        <a href="img/gallery/7.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/7s.jpg"></a>
                                        <a href="img/gallery/2.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/2s.jpg"></a>
                                        <a href="img/gallery/3.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/3s.jpg"></a>
                                        <a href="img/gallery/1.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/1s.jpg"></a>
                                        <a href="img/gallery/9.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/9s.jpg"></a>
                                        <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/10s.jpg"></a>
                                        <a href="img/gallery/11.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/11s.jpg"></a>
                                        <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/12s.jpg"></a>
                                        <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/4s.jpg"></a>
                                        <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/5s.jpg"></a>
                                        <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/4s.jpg"></a>
                                        <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/5s.jpg"></a>
                                        <a href="img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/6s.jpg"></a>
                                        <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/12s.jpg"></a>
                                        <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/4s.jpg"></a>
                                        <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/5s.jpg"></a>
                                        <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/10s.jpg"></a>
                                        <a href="img/gallery/1.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/1s.jpg"></a>
                                        <a href="img/gallery/2.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/2s.jpg"></a>
                                        <a href="img/gallery/3.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/3s.jpg"></a>
                                        <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/4s.jpg"></a>
                                        <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/5s.jpg"></a>
                                        <a href="img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/6s.jpg"></a>
                                        <a href="img/gallery/7.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/7s.jpg"></a>
                                        <a href="img/gallery/8.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/8s.jpg"></a>
                                        <a href="img/gallery/9.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/9s.jpg"></a>
                                        <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/10s.jpg"></a>
                                        <a href="img/gallery/11.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/11s.jpg"></a>
                                        <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/12s.jpg"></a>
                                        <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/4s.jpg"></a>
                                        <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/5s.jpg"></a>
                                        <a href="img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/6s.jpg"></a>
                                        <a href="img/gallery/7.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/7s.jpg"></a>
                                        <a href="img/gallery/2.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/2s.jpg"></a>
                                        <a href="img/gallery/3.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/3s.jpg"></a>
                                        <a href="img/gallery/1.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/1s.jpg"></a>
                                        <a href="img/gallery/9.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/9s.jpg"></a>
                                        <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/10s.jpg"></a>
                                        <a href="img/gallery/11.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/11s.jpg"></a>
                                        <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/12s.jpg"></a>
                                        <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/4s.jpg"></a>
                                        <a href="img/gallery/7.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/7s.jpg"></a>
                                        <a href="img/gallery/8.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/8s.jpg"></a>
                                        <a href="img/gallery/9.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/9s.jpg"></a>
                                        <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/10s.jpg"></a>
                                        <a href="img/gallery/11.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/11s.jpg"></a>
                                        <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/12s.jpg"></a>
                                        <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/4s.jpg"></a>
                                        <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/5s.jpg"></a>
                                        <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/5s.jpg"></a>
                                        <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/4s.jpg"></a>
                                        <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/5s.jpg"></a>
                                        <a href="img/gallery/6.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/6s.jpg"></a>
                                        <a href="img/gallery/12.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/12s.jpg"></a>
                                        <a href="img/gallery/4.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/4s.jpg"></a>
                                        <a href="img/gallery/5.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/5s.jpg"></a>
                                        <a href="img/gallery/10.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/10s.jpg"></a>
                                        <a href="img/gallery/11.jpg" title="Image from Unsplash" data-gallery=""><img
                                                src="img/gallery/11s.jpg"></a>

                                        <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                                        <div id="blueimp-gallery" class="blueimp-gallery">
                                            <div class="slides"></div>
                                            <h3 class="title"></h3>
                                            <a class="prev">‹</a>
                                            <a class="next">›</a>
                                            <a class="close">×</a>
                                            <a class="play-pause"></a>
                                            <ol class="indicator"></ol>
                                        </div>

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
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>

        <!-- blueimp gallery -->
        <script src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

</body>

</html>