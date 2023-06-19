<?php
include('connection.php');
$deptname = $_["deptname"];
$currentDay = date("l");

if ($deptname !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = "SELECT unitname, unitnumber, doctoname FROM doctorincharge WHERE deptname= " . $deptname . " AND workingday = '" . $currentDay . "'";
	$row = mysqli_fetch_array($query);
	// Get the first name
	$unitname = $row["unitname"];
    $unitnumber = $row["unitnumber"];
    $doctorname = $row["doctorname"];

}
// Store it in a array
$result = array("$unitname","$unitnumber","$doctorname");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
