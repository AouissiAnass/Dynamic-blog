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

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="ChangeMDP.css">
    <title>Forgotten password</title>
</head>

<body>
    <form class="container" method="POST" action="ChangeMDP.php">
        <div class="form-group">
            <label for="NewPassword">Enter The new Password : </label>
            <input type="Password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password">
        </div>
        <button type="submit" class="btn btn-primary button">Submit</button>
    </form>
    <?php
    if (isset($_SESSION["LoginUsername"], $_POST['NewPassword'])) {
        $Userformdp = $_SESSION["LoginUsername"];
        $NewPassword = $_POST['NewPassword'];
        $conn = new mysqli("localhost", "root", "", "signup");
        $sql = "UPDATE signup SET MDP='$NewPassword' WHERE Username = '$Userformdp'";
        $result = $conn->query($sql);
        if ($conn->query($sql)) {
            echo $_SESSION['LoginUsername'] ." Your password was succesfully changed ";
            $conn->close();
        } else {
            echo "Walo";
        }
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="nav-bar ">
            <li><a href="/Admin_Panel.php">Admin Panel</a></li>
            <li><a href="/Sys LOGIN/logout.php">Logout</a></li>
        </ul>
    </nav>

</body>

</html>