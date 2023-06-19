<html>
  <body>
    <center>
      <style>
        table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
</style>
<div id="print-section">      
<?php      
    include('connection.php'); 
    
    if (isset($_GET['id'])) {
      // Get the id from the URL
      $regno = $_GET['regno'];
  
      // Prepare the SQL statement to retrieve the record
      $sql = "SELECT * FROM opdemographic WHERE regno = $regno";
  
      // Execute the query
      $result = mysqli_query($con, $sql);
  
      // Check if the query was successful
      if (mysqli_num_rows($result) > 0) {
          // Fetch the record
          $row = mysqli_fetch_assoc($result);
  
          // Print the record
      
    echo "<h3>INDIRA GANDHI GOVERNMENT GENERAL HOSPITAL <br>";
    echo "AND POST GRADUATE INSTITUTE, PUDUCHERRY <br>";
    echo "<br> ".$row["deptcode"]."-". $row["deptname"];
    echo "<br>------------------------------------------------------------------------------------------";
    echo "<br> RegNo: OP-2023-".$row["regno"]  .$spaces."Name  :" . $row["name"];
    echo "<br> Date   :"         . $row["date"].$spaces."State :" . $row["state"]; 
       echo "<br> Age: " . $row["age"]. " Yrs./ " . $row["sex"];
    echo"<br>-------------------------------------------------------------------------------------------";
   
      
} else {
    echo "No records found.";
}
} 
?>  
</div>
<br>
<button onclick="print()" id="no-print">Print</button>

<script>
var printSection = document.getElementById("print-section");
    function print() {
    var printSection = document.getElementById("print-section");
    var printWindow = window.open("", "", "height=600,width=800");
    printWindow.document.write(printSection.innerHTML);
    printWindow.document.write("</centre></body></html>");
    printWindow.document.close();
    printWindow.print();
    }
</script>


