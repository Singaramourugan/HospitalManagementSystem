<?php
$username = $_POST["username"];
$password = $_POST["password"];

// Connect to the database
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ghhms";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the entered username and password match any records in the "register" table
$sql = "SELECT username,password FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Authenticate the user
 include('op1.php');
} else {
  // Invalid username or password
  echo "Login failed. Invalid username or password.";
}

mysqli_close($conn);
