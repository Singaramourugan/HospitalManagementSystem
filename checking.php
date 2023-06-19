<html>
    DEMO PAGE
</body>
 <label>Department</label>
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

$sql = "SELECT deptcode, deptname FROM department";
$result = $conn->query($sql);

echo  '<select  id="deptname" onkeyup="GetDetail(this.value)" name="deptname">';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value='".$row["deptcode"]."'>".$row["deptname"]."</option>";
    }
} else {
    echo "0 results";
}
$conn->close();
echo "</select>";
?>
   
<script>
  
        // onkeyup event will occur when the user 
        // release the key and calls the function
        // assigned to this event
        function GetDetail(str) {
            if (str.length == 0) {
                document.getElementById("unitname").value = "";
                document.getElementById("unitnumber").value = "";
                document.getElementById("doctorname").value = "";
                return;
            }
            else {
  
                // Creates a new XMLHttpRequest object
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
  
                    // Defines a function to be called when
                    // the readyState property changes
                    if (this.readyState == 4 && 
                            this.status == 200) {
                          
                        // Typical action to be performed
                        // when the document is ready
                        var myObj = JSON.parse(this.responseText);
  
                        
                        // Assign the value received to
                        // last name input field
                        document.getElementById(
                            "unitname").value = myObj[0];
                            document.getElementById(
                            "unitnumber").value = myObj[1];
                            document.getElementById(
                            "doctorname").value = myObj[2];
                    }
                };
  
                // xhttp.open("GET", "filename", true);
                xmlhttp.open("GET", "get_department_details.php?deptname=" + str, true);
                  
                // Sends the request to the server
                xmlhttp.send();
            }
        }
        
    </script>       
<p >  
                <label> Unit name: </label>  
                <input type = "text" id ="unitname"  value="" name  = "unitname"  required/>  
                
            </p>
            <p >  
                <label>Unit number: </label>  
                <input type = "number" id ="unitnumber" value="" name  = "unitnumber"  required/>  
                
            </p>
            <p >  
                <label> Doctor in charge: </label>  
                <input type = "text" id ="doctorname" value="" name  = "doctorname"  required/>  
                
            </p>
    </body>
    </html>