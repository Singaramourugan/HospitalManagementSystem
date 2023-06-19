<?php

// Get the user id
$regno = $_REQUEST['regno'];

// Database connection
$con = mysqli_connect("localhost", "root", "", "ghhms");

if ($regno !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT name,
	age FROM opdemographic WHERE regno='$regno'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	$name = $row["name"];

	// Get the first name
	$agee = $row["age"];
}

// Store it in a array
$result = array("$name", "$age");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
