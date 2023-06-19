<?php
include("patient.php");
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <centre><h2>OUT PATIENTS DETAILS</h2></centre>
  <centre>
<style>
table {
        border-collapse: collapse;
        width: 100%;
      }
      th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: left;
        height: 50px;
      }
      th {
        background-color: #dddddd;
        font-size: 20px;
        color: blue;
      }
      td {
        font-size: 18px;
        color: green;
      }
</style>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N </th>

       <th>Register Number </th>
         <th>Date</th>
         <th>Name</th>
         <th>State</th>
         <th>Age</th>
         <th>Sex</th>
         <th>Department Code</th>
         <th>Department Name</th>
         
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo "OP-2023-"; echo $data['regno']??''; ?></td>
      <td><?php echo $data['date']??''; ?></td>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['state']??''; ?></td>
      <td><?php echo $data['age']??''; ?></td>
      <td><?php echo $data['sex']??''; ?></td>
      <td><?php echo $data['deptcode']??''; ?></td>  
      <td><?php echo $data['deptname']??''; ?></td> 
      
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
