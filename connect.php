<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "data";
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die(mysqli_error($conn));
}
?>