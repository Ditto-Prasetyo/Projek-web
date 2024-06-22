<?php
session_start();
include 'connection.php';
$sql = "SELECT * FROM authors";
$sql_artikel2 = "SELECT * FROM posts WHERE id = '3'";
$sql3 = "SELECT
                                    kontributor.id_kontributor,
                                    posts.date,
                                    posts.title,
                                    authors.name,
                                    kategori.nama_kategori,
                                    kategori.keterangan,
                                    posts.Images
                                    FROM 
                                    kontributor
                                    JOIN
                                    posts ON kontributor.id_artikel = posts.id
                                    JOIN
                                    authors ON kontributor.id_penulis = authors.id_author
                                    JOIN
                                    kategori ON kontributor.id_kategori = kategori.id_kategori
                                    WHERE
                                    posts.id = '2'";

$sql1 = "SELECT
kontributor.id_kontributor,
posts.date,
posts.title,
authors.name,
kategori.nama_kategori,
kategori.keterangan,
posts.Images
FROM 
kontributor
JOIN
posts ON kontributor.id_artikel = posts.id
JOIN
authors ON kontributor.id_penulis = authors.id_author
JOIN
kategori ON kontributor.id_kategori = kategori.id_kategori
WHERE
posts.id = '3'";

$sql2 = "SELECT
kontributor.id_kontributor,
posts.date,
posts.title,
authors.name,
kategori.nama_kategori,
kategori.keterangan,
posts.Images
FROM 
kontributor
JOIN
posts ON kontributor.id_artikel = posts.id
JOIN
authors ON kontributor.id_penulis = authors.id_author
JOIN
kategori ON kontributor.id_kategori = kategori.id_kategori
WHERE
posts.id = '1'";

$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql3);
$result3 = mysqli_query($conn, $sql1);
$result4 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data_id_author = $row['id_author'];
        $data_namaAuthor = $row['name'];
        $data_emailAuthor = $row['email'];
    }
}
if (mysqli_num_rows($result2) > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {
        $data_id_posts = $row['id_kontributor'];
        $data_date = $row['date'];
        $data_title = $row['title'];
        $data_nama = $row['name'];
        $data_category = $row['nama_kategori'];
        $data_Images = $row['Images'];
        $data_keterangan = $row['keterangan'];
    }
}
if (mysqli_num_rows($result3) > 0) {
    while ($row = mysqli_fetch_assoc($result3)) {
        $data_id_posts1 = $row['id_kontributor'];
        $data_date1 = $row['date'];
        $data_title1 = $row['title'];
        $data_nama1 = $row['name'];
        $data_category1 = $row['nama_kategori'];
        $data_Images1 = $row['Images'];
        $data_keterangan1 = $row['keterangan'];
    }
}
if (mysqli_num_rows($result4) > 0) {
    while ($row = mysqli_fetch_assoc($result4)) {
        $data_id_posts2 = $row['id_kontributor'];
        $data_date2 = $row['date'];
        $data_title2 = $row['title'];
        $data_nama2 = $row['name'];
        $data_category2 = $row['nama_kategori'];
        $data_Images2 = $row['Images'];
        $data_keterangan2 = $row['keterangan'];
    }
}
?>