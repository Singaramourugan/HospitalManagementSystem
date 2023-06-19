<?php
include("inpatient.php");
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <centre><h2>INPATIENTS DETAILS</h2></centre>
  <centre>
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
</style>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N </th>

       <th>In-patient Regno</th>
         <th>Out-patient Regno</th>
         <th>Name</th>
         <th>Age</th>
         <th>Admission Date</th>
         <th>Department Name</th>
         <th>Unit</th>
         <th>Admission Doctor</th>
         <th>Ward name</th>
         <th>Reference no</th>
         <th>Reference ins</th>
         <th>MLC at</th>
         <th>MLC reason</th>
         <th>Martial Status</th>
         <th>Religion</th>
         <th>Relation</th>
         <th>Address</th>
         <th>Mobile</th>
         <th>Aadhar</th>
         <th>Ration</th>        
         <th>Preliminary Diagnosis</th>
         <th>City</th>
         <th>State</th>
         <th>Occupation</th>
         <th>Category</th>
         <th>Income</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo "  IP-2023-"; echo $data['ipno']??''; ?></td>
      <td><?php echo "OP-2023-"; echo $data['regno']??''; ?></td>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['age']??''; ?></td>
      <td><?php echo $data['admdate']??''; ?></td>
      <td><?php echo $data['deptname']??''; ?></td>
      <td><?php echo $data['unit']??''; ?></td>
      <td><?php echo $data['admdr']??''; ?></td>  
      <td><?php echo $data['wards']??''; ?></td> 
      <td><?php echo $data['refno']??''; ?></td> 
      <td><?php echo $data['refins']??''; ?></td> 
      <td><?php echo $data['mlcat']??''; ?></td>
      <td><?php echo $data['mlrea']??''; ?></td>
      <td><?php echo $data['marstat']??''; ?></td> 
      <td><?php echo $data['religion']??''; ?></td> 
      <td><?php echo $data['relation']??''; ?></td> 
      <td><?php echo $data['ad1']??''; ?><?php echo $data['ad2']??''; ?></td> 
      <td><?php echo $data['mobile']??''; ?></td> 
      <td><?php echo $data['aadhar']??''; ?></td>
      <td><?php echo $data['ration']??''; ?></td> 
      <td><?php echo $data['prediag']??''; ?></td> 
      <td><?php echo $data['city']??''; ?></td> 
      <td><?php echo $data['state']??''; ?></td> 
      <td><?php echo $data['occupation']??''; ?></td> 
      <td><?php echo $data['category']??''; ?></td>
      <td><?php echo $data['income']??''; ?></td> 
      <td>
      <form name="f2" action = "ipviewandprint.php"  method = "POST" > 
<p> 
 <input type =  "submit" id = "btn2" value = "view and print"/>   
</p>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr> 
    <?php
    }?>
    </centre>
    </tbody>
  </table>
   </div>
</div>
</div>
  </div>
</body>
</html>
