<html>
    
    <head><h3>GENERATE REPORT</h3></head>
    <body>
    <style>
 table {
        border-collapse: collapse;
        width: 100%;
      }
      th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: left;
        height: 5px;
      }
      th {
        background-color: #dddddd;
        font-size: 20px;
        color: black;
      }
      td {
        font-size: 18px;
        color: black;
      }</style>
    <form>
        <div id="no-print">
    <label>Start Date:</label> <input type="date" name="start_date">
    <label>End Date:</label> <input type="date" name="end_date">
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
    $sql = "SELECT * FROM opdemographic WHERE date BETWEEN '$start_date' AND '$end_date'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr> <th>Regno</th><th>Name</th><th>State</th><th>Age</th><th>Sex</th><th>Dept.No</th><th>Dept.Name</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["regno"]. "</td>";

            echo "<td>" . $row["name"]. "</td>";
            echo "<td>" . $row["state"]. "</td>";
            echo "<td>" . $row["age"]. "</td>";
            echo "<td>" . $row["sex"]. "</td>";
            echo "<td>" . $row["deptcode"]. "</td>";
            echo "<td>" . $row["deptname"]. "</td>";
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

    
    
      

        