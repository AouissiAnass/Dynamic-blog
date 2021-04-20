<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="preview.css">
    <title>Document</title>
</head>

<body>
    <?php
    $conn = new mysqli('localhost', 'root', '', 'signup');
    $sql = "SELECT article_img , article_body , article_title , article_author FROM posts";
    $result = mysqli_query($conn, $sql);
    while ($row = $result->fetch_assoc()) {
        echo '<div class = "card_container">' ;
        echo '<div class="card second_container" style="width: 18rem;">';
        echo '<img class="card-img-top" src="./images/'. $row["article_img"]. '" alt="Card image cap">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">'.$row["article_title"] .'</h5>';
        echo '<p class="card-text">'. $row["article_body"] .'</p>';
        echo '<p class="card-text">' . $row["article_author"] .'</p>';
        echo '<a href="#" class="btn btn-primary">Go somewhere</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</body>

</html>