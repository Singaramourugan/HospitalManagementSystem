<?php
$host = "localhost";
$username = "root";
$password = '';  
$db_name = "ghhms";

$conn = mysqli_connect($host, $username,$password,$db_name);

// Check for errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 
    $fname = $_POST['fname'];  
    $lname = $_POST['lname'];
    $username=$_POST['username']; 
    
    $email=$_POST['email'];
    $mobile = $_POST['mobile'];
    $password=$_POST['password'];
    
   
                
    $sql = "INSERT INTO users VALUES ('$fname','$lname','$username','$email','$mobile','$password')"; 
   // Save record to the database

if (mysqli_query($conn, $sql)) {
     include('oplogin.php'); ;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

