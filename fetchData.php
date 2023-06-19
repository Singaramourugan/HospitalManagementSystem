<?php
    $regno = $_POST['regno'];
    $conn = mysqli_connect("localhost", "root", "", "ghhms");
    $query = "SELECT name, age FROM opdemographic WHERE regno = '$regno'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data);
?>
