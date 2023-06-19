<?php

// Database connection
include('connection.php');
// Get the user id
$deptcode = $_REQUEST['deptcode'];

if ($deptcode !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT deptname FROM department WHERE deptcode='$deptcode'");

	$row = mysqli_fetch_array($query);
	// Get the first name
	$deptname = $row["deptname"];
}

// Store it in a array
$result = array("$deptname");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
