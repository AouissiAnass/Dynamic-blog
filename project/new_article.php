<?php
session_start() ;
?>

<?php
    $conn = new mysqli('localhost', 'root', '', 'signup');
    $User = $_SESSION["LoginUsername"] ;
    $article_title = $_POST['title'];
    $article_body = $_POST['post'];
    $article_author = $_POST['author'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "images/" . $filename;

    $sql = "INSERT INTO posts (User, article_title, article_img, article_body, article_author)
      VALUES ('$User' , '$article_title' , '$filename' , '$article_body' , '$article_author')";

    mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
    header('location:Admin_panel.php') ;
?>