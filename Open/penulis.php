<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASA-BLOG | Penulis</title>
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
                <h2>MASA-BLOG Penulis</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="pages.php">Pages</a>
                    </li>
                    <li class="active">
                        <strong><a href="penulis.php">Penulis</a></strong>
                    </li>
                </ol>
                <div class="wrapper wrapper-content">
                    <div class="row">
                        <div class="col-lg-12"></div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Penulis</h5>
                            </div>

                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Penulis</th>
                                        <th>Nama Penulis</th>
                                        <th>Email Penulis</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../Config/config.php';
                                    $sql = "SELECT * FROM authors";
                                    $result = mysqli_query($conn, $sql);
                                    $nomor_uruts = 0;
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $nomor_uruts++;
                                            $data_id_author = $row['id_author'];
                                            $data_name = $row['name'];
                                            $data_email = $row['email'];
                                            $id_hapus = $nomor_uruts;
                                            ?>
                                            <tr>
                                                <td><?php echo $nomor_uruts ?></td>
                                                <td><?php echo $data_id_author ?></td>
                                                <td><?php echo $data_name ?></td>
                                                <td><?php echo $data_email ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-xs btn-success" name="btn_ubah"
                                                        data-toggle="modal" data-target="#UbahPenulisModal">Ubah</button>
                                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"
                                                        data-target="#hapusPenulisModal<?php echo $nomor_uruts; ?>">Hapus</button>

                                                    <!-- Modal Ubah -->
                                                    <div class="modal fade" id="UbahPenulisModal" tabindex="-1" role="dialog"
                                                        aria-labelledby="UbahPenulisModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title" id="UbahPenulisModalLabel" style="text-align: center;">Ubah
                                                                        Penulis</h3>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="formPenulisArtikel" method="post"
                                                                        action="Ubah_Penulis.php" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="judul">Nama Penulis</label>
                                                                            <input type="text" class="form-control"
                                                                                id="nama_Penulis" name="nama_Penulis" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="penulis">Email</label>
                                                                            <textarea class="form-control" id="keterangan"
                                                                                name="keterangan" rows="10"></textarea>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Tutup</button>
                                                                    <button type="submit" form="formUbahPenulis"
                                                                        class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal Hapus -->
                                                    <div class="modal fade" id="hapusPenulisModal<?php echo $nomor_uruts; ?>"
                                                        tabindex="-1" role="dialog" aria-labelledby="hapusPenulisModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title" id="hapusPenulisModalLabel" style="text-align: center;">
                                                                        Konfirmasi Hapus</h3>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Apakah anda yakin ingin menghapus penulis
                                                                    "<?php echo $data_name; ?>" ini?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form method="post" action="hapus_penulis.php">
                                                                        <input type="hidden" name="id_hapus"
                                                                            value="<?php echo $id_hapus; ?>">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Batal</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Hapus</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                    </tr>
                                </tbody>
                            </table>
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
        <div id="right-sidebar" class="animated">

        </div>
    </div>
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