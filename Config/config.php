<head>
    <title>Welcome to MyCMS</title>
</head>

<body>
    <?php
    $host = "sql311.infinityfree.com"; //untuk host
    $username = "if0_36771023"; //untuk username
    $password = "i3WmrkEZiVEbfw"; //untuk password
    $database = "if0_36771023_teori_web"; //untuk database
    $conn = mysqli_connect($host, $username, $password, $database);

    if ($conn) {
        echo "";
    } else {
        echo "<p style='text-align: center;'>Server not connected</p>";
    }
    ?>
</body>