<?php
include '../Config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_kategori = $_POST['nama_kategori'];
    $keterangan = $_POST['keterangan'];

    $sqlKategori = "INSERT INTO kategori (nama_kategori, keterangan) VALUES ('$nama_kategori','$keterangan')";
    if (mysqli_query($conn, $sqlKategori)){
        echo "<script>alert('kategori berhasil ditambahkan!'); window.location.href='kategori.php';</script>";
    } else {
        echo "Error: " . $sqlKategori . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Sorry We can't upload the new data";
}