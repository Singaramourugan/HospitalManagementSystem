<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ghhms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT distno, district FROM districts";
$result = $conn->query($sql);

echo '<select id="district" name="district">';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value='".$row["distno"]."'>".$row["district"]."</option>";
    }
} else {
    echo "0 results";
}
$conn->close();
echo "</select>";
?>
