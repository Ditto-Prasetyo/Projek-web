<?php
include '../Config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_hapus = $_POST['id_hapus'];

    // Hapus artikel dari database
    $sql_delete_kategori = "DELETE FROM kategori WHERE id_kategori = $id_hapus";
    if (mysqli_query($conn, $sql_delete_kategori)) {
        echo "<script>alert('kategori berhasil dihapus!'); window.location.href='kategori.php';</script>";
    } else {
        // Gagal menghapus artikel
        echo "Gagal menghapus artikel.";
    }

    $stmt->close();
    $conn->close();
}
?>