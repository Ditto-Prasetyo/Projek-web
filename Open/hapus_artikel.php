<?php
include '../Config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_hapus = $_POST['id_hapus'];

    // Hapus artikel dari database
    $sql_delete_kategori = "DELETE FROM posts WHERE id IN (SELECT id_kontributor FROM kontributor WHERE id_kontributor = $id_hapus)";
    $sql_delete_kontributor = "DELETE FROM kontributor WHERE id_kontributor = $id_hapus";
    if (mysqli_query($conn, $sql_delete_kategori)) {
        if (mysqli_query($conn, $sql_delete_kontributor)) {
            echo "<script>alert('artikel berhasil dihapus!'); window.location.href='artikel.php';</script>";
        } else {
            // Gagal menghapus artikel
            echo "Gagal menghapus artikel.";
        }
    } else {
        // Gagal menghapus artikel
        echo "Gagal menghapus artikel.";
    }

    $stmt->close();
    $conn->close();
}
?>