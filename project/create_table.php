<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE posts (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
User VARCHAR(30) NOT NULL,
article_title VARCHAR(50) NOT NULL,
article_img VARCHAR(255) NOT NULL,
article_body TEXT NOT NULL,
article_author VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>