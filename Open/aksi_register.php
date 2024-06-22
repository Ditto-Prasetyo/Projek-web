<?php
session_start();
include '../Config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email_admin']; 
    $nama = $_POST['nama_admin'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admin (name_admin, email_admin, password ) VALUES ('$nama','$email', '$password')";
    if (mysqli_query($conn, $sql)){
        echo "<script>alert('Anda berhasil menjadi bagian dari kami!'); window.location.href='login.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Sorry We can't upload your data!";
}

mysqli_close($conn);
?>
