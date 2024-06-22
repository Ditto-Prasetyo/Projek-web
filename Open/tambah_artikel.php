<?php
include '../Config/config.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['date'], $_POST['title'], $_POST['contents'], $_FILES['images'])) {
        echo "Error: Missing required fields.";
    }
    $date = $_POST['date'];
    $title = $_POST['title'];
    $content = $_POST['contents'];
    // Handle file upload
    $target_dir = "../Images/";
    $target_file = $target_dir . basename($_FILES["images"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["images"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
    // if (file_exists($target_file)) {
    //     echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }

    // Check file size
    if ($_FILES["images"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
            // Save article data to database
            $sql_post = "INSERT INTO posts (date, title, content, Images) VALUES ('$date', '$title', '$content', '$target_file')";
            if (mysqli_query($conn, $sql_post)) {
                $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 1";
                $result = mysqli_query($conn, $sql);
                // Get the last inserted id for posts
                // Assume id_penulis is a predefined value, or retrieve it based on your application logic
                $id_penulis = $_SESSION['id_author'];
                $id_kategori = $_POST['kategori']; // or get this dynamically based on your application logic
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $id_artikel = $row['id'];
                } else {
                    echo "Error retrieving the last inserted article ID.";
                    exit;
                }
                // Save contributor data to database
                $sql_kontributor = "INSERT INTO kontributor (id_penulis, id_kategori, id_artikel) VALUES ('$id_penulis', '$id_kategori', '$id_artikel')";
                if (mysqli_query($conn, $sql_kontributor)) {
                    echo "The file" . htmlspecialchars(basename($_FILES["images"]["name"])) . "has been uploaded!";
                } else {
                    echo "Error: " . $sql_kontributor . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Error: " . $sql_post . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

mysqli_close($conn);

?>