<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="MDP.css">
  <title>Forgotten password</title>
</head>

<body>
  <form class="container" method="POST" action="MDP.php" action="ChangeMDP.php">
    <div class="form-group">
      <label for="Useremail">Enter your E-mail : </label>
      <input type="text" class="form-control" id="Useremail" name="Useremail" placeholder="Enter your E-mail">
    </div>
    <button type="submit" class="btn btn-primary button">Submit</button>
  </form>
  <?php
  $conn = new mysqli("localhost", "root", "", "signup");
  if (isset($_POST['Useremail'])) {
    $email = $_POST['Useremail'];
    $_SESSION["Useremail"] = $email;
    $sql = "SELECT email, MDP FROM signup WHERE email ='$email'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) !== 0) {
      header("Location: ChangeMDP.PHP");
    } else {
      echo "this email doesnt exist " ;
    }
    $conn->close();
  }
  ?>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="nav-bar ">
      <li><a href="./Signup.php">Signup</a></li>
      <li><a href="/sys%20LOGIN/Signin.php">Signin</a></li>
      <li><a href="/sys%20LOGIN/MDP.php">MDP</a></li>
      <li><a href="/sys%20LOGIN/Profile.php">Profile</a></li>
      <li><a href="/sys%20LOGIN/logout.php">logout</a></li>
    </ul>
  </nav>
</body>

</html>