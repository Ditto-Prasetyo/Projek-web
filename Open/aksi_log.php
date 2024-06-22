<?php

include '../Config/config.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM authors WHERE email = '$email' AND password = '$password'";
    $sql_admin = "SELECT * FROM admin WHERE email_admin = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql_admin);

    if (mysqli_num_rows($result2) > 0) {
        $row = mysqli_fetch_assoc($result2);
        session_start();
        $_SESSION['id_admin'] = $row['id_admin'];
        $_SESSION['email'] = $row['email_admin'];
        $_SESSION['nama'] = $row['name_admin'];
        header("location: index.php");
    } else if (mysqli_num_rows($result) >0){
        $row2 = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['id_author'] = $row['id_author'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['nama'] = $row['name'];
        header ('location: ../Open2/index.php');
    }
} else {
    echo "Silakan isi form login.";
}


// function hariIndonesia($nama_hari)
// {
//     $hari = $nama_hari;
//     switch ($hari) {
//         case "Sunday" :
//             $hari = "Minggu";
//         return $hari;

//         case "Monday" :
//             $hari = "Senin";
//         return $hari;

//         case "Tuesday" :
//             $hari = "Selasa";
//         return $hari;

//         case "Wednesday" :
//             $hari = "Rabu";
//         return $hari;

//         case "Thursday" :
//             $hari = "Kamis";
//         return $hari;

//         case "Saturday" :
//             $hari = "Sabtu";
//         return $hari;

//         default:
//         $hari = "Hari Sekarang!";
//     }
// }
mysqli_close($conn);
?>