<?php
include '../Config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_hapus = $_POST['id_hapus'];

    // Hapus artikel dari database
    $sql_delete_penulis = "DELETE FROM authors WHERE id_author= $id_hapus";
    if (mysqli_query($conn, $sql_delete_penulis)) {
        echo "<script>alert('artikel berhasil dihapus!'); window.location.href='penulis.php';</script>";
    } else {
        // Gagal menghapus artikel
        echo "Gagal menghapus artikel.";
    }

    $stmt->close();
    $conn->close();
}
?>