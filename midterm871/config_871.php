<?php
$servername = "localhost";
$username = "midterm871";
$password = "871";
$dbname="midterm871";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>