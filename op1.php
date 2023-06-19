<html>  
<head>  
    <title>Out Patient Registration </title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">  
  </head>  
  <style>
      body {
        background-image: url(https://st4.depositphotos.com/1157091/21370/v/450/depositphotos_213704662-stock-illustration-abstract-medical-background-space-text.jpg);
        background-size:cover;
      }
      label {
        display: block;
        margin-right: 10px;
      
      }
      h1{
        font-size:40px;
      }
      label{
    font-size:25px;
    font-family: 'Raleway', sans-serif;
  }
  input[type="text"] {
        width: 300px;
        height: 30px;
        font-size: 25px;
        font-family: 'Raleway', sans-serif;
      }
      select, input[type="date"] {
        width: 300px;
        height: 30px;
        font-size: 25px;
        font-family: 'Raleway', sans-serif;
        
      }
      input[type="number"] {
        width: 300px;
        height: 30px;
        font-size: 25px;
        font-family: 'Raleway', sans-serif;
      }
      input[type="submit"]{
        width: 200px;
        height: 30px;
        font-size: 20px;
        font-family: 'Raleway', sans-serif;
      }
      
    </style>
<body>  
    <center>
<br>
<br>
<br>
<h1 style="color:black;">OUT PATIENT REGISTRATION</color></h1>
<p>
<label>Admission Date</label>
<input type="text" id="currentDateInput" value="<?php echo date("d-m-Y");?>" readonly>
<script>
  $(document).ready(function() {
    var currentDate = new Date();
    var dateString = currentDate.getFullYear() + "-" + (currentDate.getMonth() + 1) + "-" + currentDate.getDate();
    $("#currentDateInput").val(dateString);
    $("#currentDateInput").prop("readonly", true);
});
</script>                
</p>
        <form name="f1"action = "op2.php"  method = "POST">  
        <p tabindex="1">
                <label> Name: </label>  
                <input type = "text"  id ="name" name  = "name"  required/>  
            </p>  

            <p tabindex="2">
                <label for="location">State:</label>

                   <select name="state" id="state" >
                   <option value="Puducherry">Puducherry</option>
                   <option value="Tamil Nadu">Tamil Nadu</option>
                   <option value="others">Others</option>
                  </select>

            <p tabindex="3">  
                <label> Age: </label>  
                <input type = "number"  id ="age" name  = "age"  required/>  
            </p> 

            <p tabindex="4">
                <label for="sex">Gender:</label>

                   <select name="sex"  id="sex">
                   <option value="M">Male</option>
                   <option value="F">Female</option>
                   <option value="T">Transgender</option>
                </select>
                </p>

              <p tabindex="5">  
                <label> Department Code: </label>  
                <input type = "text" id ="deptcode" onkeyup="GetDetail(this.value)" value="" name  = "deptcode"  required/>  
                
            </p>
<script>
  
        // onkeyup event will occur when the user 
        // release the key and calls the function
        // assigned to this event
        function GetDetail(str) {
            if (str.length == 0) {
                document.getElementById("deptname").value = "";
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
                            "deptname").value = myObj[0];
                    }
                };
  
                // xhttp.open("GET", "filename", true);
                xmlhttp.open("GET", "gfg.php?deptcode=" + str, true);
                  
                // Sends the request to the server
                xmlhttp.send();
            }
        }
        
    </script>       
             <p tabindex="6">   
                <label> Department Name: </label> 
                <input type = "text" id ="deptname" onkeyup="GetDepartment(this.value)" value="" name  = "deptname"  required/>  
</p> 
<script>
    function GetDepartment(str) {
            if (str.length == 0) {
                document.getElementById("deptcode").value = "";
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
                            "deptcode").value = myObj[0];
                    }
                };
  
                // xhttp.open("GET", "filename", true);
                xmlhttp.open("GET", "gfg1.php?deptname=" + str, true);
                  
                // Sends the request to the server
                xmlhttp.send();
            }
        }
    </script>
                
 
            <p tabindex="7">     
                <input type =  "submit" id = "btn" value = "Register"/>  
            </p>
<p tabindex="8">       
            </p>  
        </form> 
<form name="f2" action = "showpat.php"  method = "POST" > 
<p> 
 <input type =  "submit" id = "btn2" value = "Show Patient Details"/>   
</p>
</form>
<form name="f3"  action = "gen.php"  method = "POST" > 
<p> 
 <input type =  "submit" id = "btn3" value = "Generate"/>   
</p>
</form>


    </center>
</body>     
</html>



