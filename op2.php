<div id="print-section">    
<?php
// Connect to the database
$host = "localhost";
$username = "root";
$password = '';  
$db_name = "ghhms";

$conn = mysqli_connect($host, $username,$password,$db_name);

// Check for errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$date=date("Y-m-d"); 
    $name = $_POST['name'];  
    $state = $_POST['state'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $deptcode= $_POST['deptcode']; 
    $deptname= $_POST['deptname']; 
   
                
    $sql = "INSERT INTO opdemographic VALUES (' ','$date','$name', '$state','$age','$sex','$deptcode','$deptname')"; 
   // Save record to the database

if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Retrieve and view the same record
$sql = "SELECT * FROM opdemographic ORDER BY regno DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<h3>INDIRA GANDHI GOVERNMENT GENERAL HOSPITAL <br>";
    echo "AND POST GRADUATE INSTITUTE, PUDUCHERRY <br>";
    echo "<br> ".$row["deptcode"]."-". $row["deptname"];
    echo "<br>------------------------------------------------------------------------------------------";
    echo "<br> RegNo: OP-2023-".$row["regno"]  ."Name  :" . $row["name"];
    echo "<br> Date   :"         . $row["date"]."State :" . $row["state"]; 
       echo "<br> Age: " . $row["age"]. " Yrs./ " . $row["sex"];
    echo"<br>-------------------------------------------------------------------------------------------";
   
      
    }
} else {
    echo "No records found";
}

// Close connection
mysqli_close($conn);

?>
</div>
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

<form name="f2" action = "op1.php"  method = "POST" > 
<p> 
 <input type =  "submit" id = "btn2" value = "Back"/>   
</p>
</form>



