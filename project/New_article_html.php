<?php
session_start() ;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap"
      rel="stylesheet"
    />
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
          <a class="nav-item nav-link link" href="#">log out</a>
        </div>
      </div>
       <div class="col-10 ">
        <h1>Create a new Post</h1>
        <form class ="article_col" action="new_article.php" method="POST" enctype="multipart/form-data">
             <input type="text" name="title" placeholder="Post Title"/>   
             <input type="file" name="uploadfile">
             <textarea name="post" placeholder="Write your post."></textarea>
             <input type="text" name="author" placeholder="Author name"/>
            <div class="button_container"><button type="submit" value="post">Post</button></div>
        </form>
        </div>
      </div>
    </div>
  </body>
</html>
