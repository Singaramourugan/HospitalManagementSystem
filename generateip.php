<html>
    
    <head><h3>GENERATE REPORT</h3></head>
    <body>
    <style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
</style>
    <form>
        <div id="no-print">
    <label>From:</label> <input type="date" name="start_date">
    <label>To:</label> <input type="date" name="end_date">
    <input type="submit" value="Generate" name="submit">
</div>
</form>

<div id="print-section">
    <style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
</style>
<?php

if(isset($_GET["submit"])){
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ghhms";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the start and end dates from the form
    $start_date = $_GET["start_date"];
    $end_date = $_GET["end_date"];

    // Select records between the start and end dates
    $sql = "SELECT * FROM ipdemographic WHERE admdate BETWEEN '$start_date' AND '$end_date'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>In-patient Regno</th>
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
        <th>Income</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["ipno"]. "</td>";
            echo "<td>" . $row["regno"]. "</td>";
            echo "<td>". $row['name']."</td>";
            echo "<td>". $row['age']. "</td>";
            echo "<td>". $row['admdate']. "</td>";
            echo "<td>". $row['deptname']. "</td>";
            echo "<td>". $row['unit']. "</td>";
            echo "<td>". $row['admdr'] . "</td>";
            echo "<td>". $row['wards']. "</td>";
            echo "<td>". $row['refno']. "</td>";
            echo "<td>". $row['refins']. "</td>";
            echo "<td>". $row['mlcat']. "</td>";
            echo "<td>". $row['mlrea']. "</td>";
            echo "<td>". $row['marstat']. "</td>";
            echo "<td>". $row['religion']. "</td>";
            echo "<td>". $row['relation']. "</td>";
            echo "<td>". $row['ad1'].$row['ad2']. "</td>";
            echo "<td>". $row['mobile']. "</td>";
            echo "<td>". $row['aadhar']. "</td>";
            echo "<td>". $row['ration']. "</td>";
            echo "<td>". $row['prediag']. "</td>";
            echo "<td>". $row['city']. "</td>";
            echo "<td>". $row['state']. "</td>";
            echo "<td>".  $row['occupation']. "</td>";
            echo "<td>". $row['category']. "</td>";
            echo "<td>". $row['income']. "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }

    $conn->close();
}
?>
</div>

<button onclick="print()">Print</button>


<script>
    var printSection = document.getElementById("print-section");
    function print() {
    var printSection = document.getElementById("print-section");
    var printWindow = window.open("", "", "height=600,width=800");
    printWindow.document.write(printSection.innerHTML);
    printWindow.document.write("</body></html>");
    printWindow.document.close();
    printWindow.print();
}


</script>

</body>
</html>

    
    
      

        