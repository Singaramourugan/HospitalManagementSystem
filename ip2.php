<?php      
    include('connection.php'); 
    $regno=$_POST['regno'];
    $name = $_POST['name']; 
    $age = $_POST['age'];
    $admdate=date("Y-m-d"); 
    $deptname= $_POST['deptname']; 
    $unit=$_POST['unit'];
    $admdr=$_POST['admdr'];
    $wards=$_POST['wards'];
    $refno=$_POST['refno'];
    $refins=$_POST['refins'];
    $mlcat=$_POST['mlcat'];
    $mlrea=$_POST['mlrea'];
    $marstat=$_POST['marstat'];
    $religion=$_POST['religion'];
    $relation=$_POST['relation'];
    $ad1=$_POST['ad1'];
    $ad2=$_POST['ad2'];
    $mobile=$_POST['mobile'];
    $aadhar=$_POST['aadhar'];
    $ration=$_POST['ration'];
    $prediag=$_POST['prediag'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $occupation=$_POST['occupation'];
    $category=$_POST['category'];
    $income=$_POST['income'];

                
    $sql = "INSERT INTO ipdemographic VALUES (' ','$regno','$name', '$age','$admdate','$deptname','$unit','$admdr', '$wards', '$refno', '$refins', '$mlcat', '$mlrea', '$marstat','$religion', '$relation', '$ad1', '$ad2', '$mobile', '$aadhar', '$ration', '$prediag', '$city', '$state', '$occupation', '$category', '$income')"; 
   
      
      if ($con->query($sql) === TRUE) 
      {
    include('ip1.php');
     } 
    else
    {
    echo "Error: " . $sql . "<br>" . $con->error;
    }
$con->close(); 
?>  

