<?php
session_start() ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styleEdit.css" />
  <title>Edit Article</title>
</head>

<body>
  <div class="row header1">
    <div class="col AdminPanel">My AdminPanel</div>
    <div class="col User"><?php echo $_SESSION['LoginUsername'] ?></div>
  </div>
  <div class="row secondrow">
    <div class="col-2 mynav">
      <div class="navbar-nav">
        <a class="nav-item nav-link link" href="./Sys LOGIN/logout.php">log out</a>
      </div>
    </div>
    <div class="col-10 ">
      <h1>Edit Post</h1>
      <?php
      $conn = new mysqli('localhost', 'root', '', 'signup');
      $Article_edit_id = $_GET['id'];
      $sql = "SELECT article_body , article_title , article_author FROM posts WHERE id = $Article_edit_id ";
      $result = mysqli_query($conn, $sql);
      while ($row = $result->fetch_assoc()) {
        $title = $row["article_title"];
        $body = $row["article_body"];
        $author = $row["article_author"];
        echo "<form class='article_col' method='POST' enctype='multipart/form-data'><input type='text' name='edit_title' value = '$title'  /><input type='file' name='edit_uploadfile'><textarea name='edit_post' value= '$body'  ></textarea><input type='text' name='edit_author' value= '$author'   /> <div class='button_container'><button type='submit' value='post'>Post</button></div></form>";
      }
      ?>

      <?php
      $conn = new mysqli("localhost", "root", "", "signup");
      $Edit_ID = $_GET['id'];
      if (isset($_POST['edit_author'])) {
        $Edit_title = $_POST['edit_title'];
        $Edit_post = $_POST['edit_post'];
        $Edit_author = $_POST['edit_author'];
        $filename = $_FILES["edit_uploadfile"]["name"];
        $tempname = $_FILES["edit_uploadfile"]["tmp_name"];
        $folder = "images/" . $filename;
        if (move_uploaded_file($tempname, $folder)) {
          $msg = "Image uploaded successfully";
        } else {
          $msg = "Failed to upload image";
        }
        $sql = "UPDATE posts SET article_title='$Edit_title' , article_img ='$filename' , article_body ='$Edit_post', article_author ='$Edit_author'  WHERE id = '$Edit_ID'";
        mysqli_query($conn, $sql);
        header('location:Admin_panel.php');
      }
      ?>
    </div>
  </div>
  </div>
</body>

</html>