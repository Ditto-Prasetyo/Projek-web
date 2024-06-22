<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASA-BLOG | Daftar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">HAI!</h1>
            </div>
            <h3>Daftar dulu ke MASA-BLOG</h3>
            <p>Buat akun disini.</p>
            <form class="m-t" role="form" action="aksi_register.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="nama" placeholder="Nama" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="username" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <div class="checkbox i-checks">
                        <label> <input type="checkbox" required=""><i></i> Setuju pada terms and policy </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Daftar</button>
                <p class="text-muted text-center"><small>Sudah punya akun?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.php">Login</a>
            </form>
            <p class="m-t"> <small>MASA Company &copy; 2004-2024</small> </p>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
