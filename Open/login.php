<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASA-BLOG | Masuk</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">HAI!</h1>
            </div>
            <h3>Selamat Datang di MASA-BLOG!</h3>
            <p>Aplikasi yang telah didesign untuk para blogger meletakan inspirasi pemikiran atau tujuan mereka ke dalam suatu tulisan blog.</p>
            <p>Masuk dulu yah untuk melihat dashboard.....</p>
            <form class="m-t" role="form" action="aksi_log.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Masuk</button>
                <a href="#"><small>Lupa Sandi?</small></a>
                <p class="text-muted text-center"><small>Tidak memiliki akun?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.php">Buat akun</a>
            </form>
            <p class="m-t"> <small>MASA Company &copy; 2004-2024</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
