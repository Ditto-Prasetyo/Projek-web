<?php
session_start();
$_SESSION['page'] = "posts";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASA-BLOG | Artikel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .ck-editor__editable[role="textbox"] {
            /* Editing area */
            min-height: 200px;
        }
    </style>
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
                <h2>MASA-BLOG Posts</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">
                        <strong><a href="artikel.php">Posts</a></strong>
                    </li>
                </ol>
                <div class="wrapper wrapper-content">
                    <div class="row">
                        <div class="col-lg-12"></div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Artikel</h5>
                            </div>
                            <div class="ibox-content">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#tambahArtikelModal">
                                    Tambah Artikel Baru
                                </button>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Penulis</th>
                                                <th>Gambar</th>
                                                <th>aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include '../Config/config.php';
                                            $sql = "SELECT
                                    kontributor.id_kontributor,
                                    posts.date,
                                    posts.title,
                                    authors.name,
                                    kategori.nama_kategori,
                                    posts.Images
                                    FROM 
                                    kontributor
                                    JOIN
                                    posts ON kontributor.id_artikel = posts.id
                                    JOIN
                                    authors ON kontributor.id_penulis = authors.id_author
                                    JOIN
                                    kategori ON kontributor.id_kategori = kategori.id_kategori";
                                            $result = mysqli_query($conn, $sql);
                                            $nomor_urut = 0;
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $nomor_urut++;
                                                    $data_tanggal = $row['date'];
                                                    $data_judul = $row['title'];
                                                    $data_kategori = $row['nama_kategori'];
                                                    $data_penulis = $row['name'];
                                                    $data_gambar = $row['Images'];
                                                    $id_hapus = $nomor_urut;

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $nomor_urut ?></td>
                                                        <td><?php echo $data_tanggal ?></td>
                                                        <td><?php echo $data_judul ?></td>
                                                        <td><?php echo $data_kategori ?></td>
                                                        <td><?php echo $data_penulis ?></td>
                                                        <td><?php echo $data_gambar ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-xs btn-success"
                                                                name="btn_ubah" data-toggle="modal"
                                                                data-target="#UbahArtikelModal" >Ubah</button>
                                                            <button type="button" class="btn btn-xs btn-danger"
                                                                data-toggle="modal"
                                                                data-target="#hapusArtikelModal<?php echo $nomor_urut; ?>">Hapus</button>

                                                            <!-- Modal Ubah -->
                                                            <div class="modal fade" id="UbahArtikelModal" tabindex="-1"
                                                                role="dialog" aria-labelledby="UbahArtikelModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title"
                                                                                id="UbahArtikelModalLabel" style="text-align: center;">Ubah Artikel
                                                                            </h3>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form id="formUbahArtikel" method="post"
                                                                                action="Ubah_artikel.php"
                                                                                enctype="multipart/form-data">
                                                                                <div class="form-group">
                                                                                    <label for="tanggal">Tanggal</label>
                                                                                    <input type="date" class="form-control"
                                                                                        id="date" name="date" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="hariTanggal">Hari dan
                                                                                        Tanggal</label>
                                                                                    <input type="text" class="form-control"
                                                                                        id="hariTanggal" readonly>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="judul">Judul</label>
                                                                                    <input type="text" class="form-control"
                                                                                        id="title" name="title" required>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="kategori">Kategori</label>
                                                                                    <select class="form-control" id="kategori"
                                                                                        name="kategori" required>
                                                                                        <option value="">Pilih Kategori</option>
                                                                                        <?php
                                                                                        include '../Config/config.php';
                                                                                        $sql_kategori = "SELECT id_kategori, nama_kategori FROM kategori";
                                                                                        $result_kategori = mysqli_query($conn, $sql_kategori);
                                                                                        while ($row_kategori = mysqli_fetch_assoc($result_kategori)) {
                                                                                            echo '<option value="' . $row_kategori['id_kategori'] . '">' . $row_kategori['nama_kategori'] . '</option>';
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="penulis">Isi Artikel</label>
                                                                                    <textarea class="form-control" id="contents"
                                                                                        name="contents" rows="10"></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="gambar">Gambar</label>
                                                                                    <input type="file" class="form-control"
                                                                                        id="gambar" name="gambar">
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">Tutup</button>
                                                                            <button type="submit" form="formUbahArtikel"
                                                                                class="btn btn-primary">Simpan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal Hapus -->
                                                            <div class="modal fade"
                                                                id="hapusArtikelModal<?php echo $nomor_urut; ?>" tabindex="-1"
                                                                role="dialog" aria-labelledby="hapusArtikelModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title" id="hapusArtikelModalLabel" style="text-align: center;">
                                                                                Konfirmasi Hapus</h3>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Apakah anda yakin ingin menghapus artikel
                                                                            "<?php echo $data_judul; ?>" ini?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <form method="post" action="hapus_artikel.php">
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
                                                            <!-- End of Modal Hapus -->
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

    <!-- CKEditor 5 Superbuild -->
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/super-build/ckeditor.js"></script>

    <!-- Modal untuk Menambah Artikel Baru -->
    <div class="modal fade" id="tambahArtikelModal" tabindex="-1" role="dialog"
        aria-labelledby="tambahArtikelModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="tambahArtikelModalLabel" style="text-align: center;">Tambah Artikel Baru</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formTambahArtikel" method="post" action="tambah_artikel.php"
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="hariTanggal">Hari dan Tanggal</label>
                            <input type="text" class="form-control" id="hariTanggal" readonly>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori" required>
                                <option value="">Pilih Kategori</option>
                                <?php
                                include '../Config/config.php';
                                $sql_kategori = "SELECT id_kategori, nama_kategori FROM kategori";
                                $result_kategori = mysqli_query($conn, $sql_kategori);
                                while ($row_kategori = mysqli_fetch_assoc($result_kategori)) {
                                    echo '<option value="' . $row_kategori['id_kategori'] . '">' . $row_kategori['nama_kategori'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="penulis">Isi Artikel</label>
                            <textarea class="form-control" id="contents" name="contents" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="images">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" form="formTambahArtikel" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getDayName(dateStr) {
            const date = new Date(dateStr);
            const options = { weekday: 'long' };
            return new Intl.DateTimeFormat('id-ID', options).format(date);
        }

        // Fungsi untuk memformat tanggal lengkap
        function formatDate(dateStr) {
            const date = new Date(dateStr);
            const dayName = getDayName(dateStr);
            const day = ("0" + date.getDate()).slice(-2);
            const month = ("0" + (date.getMonth() + 1)).slice(-2);
            const year = date.getFullYear();
            return `${dayName}, ${day}-${month}-${year}`;
        }

        // Event listener untuk input tanggal
        document.getElementById('date').addEventListener('input', function () {
            const dateValue = this.value;
            if (dateValue) {
                document.getElementById('hariTanggal').value = formatDate(dateValue);
            } else {
                document.getElementById('hariTanggal').value = '';
            }
        });
    </script>

    <script>
        CKEDITOR.ClassicEditor.create(document.getElementById("contents"), {
            //https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
            toolbar: {
                items: [
                    'exportPDF', 'exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },
            // Changing the language of the interface requires loading the language file using the <script> tag.
            // language: 'es',
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
            placeholder: 'Tulis artikel disini....!',
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
            // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
            htmlSupport: {
                allow: [
                    {
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true
                    }
                ]
            },
            // Be careful with enabling previews
            // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
            htmlEmbed: {
                showPreviews: false
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
            mention: {
                feeds: [
                    {
                        marker: '@',
                        feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                            '@sugar', '@sweet', '@topping', '@wafer'
                        ],
                        minimumCharacters: 1
                    }
                ]
            },
            // The "superbuild" contains more premium features that require additional configuration, disable them below.
            // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
            removePlugins: [
                // These two are commercial, but you can try them out without registering to a trial.
                // 'ExportPdf',
                // 'ExportWord',
                'AIAssistant',
                'CKBox',
                'CKFinder',
                'EasyImage',
                // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                // Storing images as Base64 is usually a very bad idea.
                // Replace it on production website with other solutions:
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                // 'Base64UploadAdapter',
                'MultiLevelList',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                'MathType',
                // The following features are part of the Productivity Pack and require additional license.
                'SlashCommand',
                'Template',
                'DocumentOutline',
                'FormatPainter',
                'TableOfContents',
                'PasteFromOfficeEnhanced',
                'CaseChange'
            ]
        });
    </script>



</body>

</html>