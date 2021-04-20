<?php
$conn = mysqli_connect("localhost", "root", "", "signup");
$sql = "CREATE TABLE Profil(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE,
    MDP VARCHAR(30) NOT NULL
)";
if(mysqli_query($conn, $sql))
{
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($conn);
