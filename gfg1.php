<?php

// Database connection
include('connection.php');
// Get the user id
$deptname = $_REQUEST['deptname'];

if ($deptname !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT deptcode FROM department WHERE deptname='$deptname'");

	$row = mysqli_fetch_array($query);
	// Get the first name
	$deptcode = $row["deptcode"];
}

// Store it in a array
$result = array("$deptcode");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
