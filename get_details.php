<?php
  include('connection.php');
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $deptname = $_GET["deptname"];
  $currentDay = date("l");
  $sql = "SELECT unitname, unitnumber, doctorname FROM doctorincharge WHERE deptname = " . $deptname. " AND workingday = '" . $currentDay . "'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    header("Content-Type: application/json");
    echo json_encode($row);
    exit;
  } else {
    echo "0 results";
  }
  mysqli_close($con);
?>
