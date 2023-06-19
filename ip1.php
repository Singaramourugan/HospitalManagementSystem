<html>  
<head>  
    <title>In Patient Registration </title>  
  </head> 
 <style>
  body{
    background-image:url(https://th.bing.com/th/id/R.721678e8d4364ca96cde28c9d03e3f30?rik=7eGXjKrk75UeAQ&riu=http%3a%2f%2ftwoj-lekarz-swidnica.pl%2fwp-content%2fuploads%2f2017%2f08%2fslider_doctor.jpg&ehk=EEqPy0KuK2QVh8uC3EqSoccEcrn%2b%2bIQlgLfxMX5CGu8%3d&risl=&pid=ImgRaw&r=0);
    
  }
  label{
    font-size:22px;
  }
  </style>

<body>

<h1 style><center>IN PATIENT REGISTRATION</center></color></h1>
<form name="i1"  action = "ip2.php"  method = "POST">  
<p tabindex="1">
  
 
               <label class="label-left"> OP-2023-: </label>  
                <input type = "number" id ="regno"  value="" name  = "regno"  required;/>  
                <script>
                document.getElementById("regno").addEventListener("input", function() {
    var regno = this.value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "fetchData.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var data = JSON.parse(xhr.responseText);
            document.getElementById("name").value = data.name;
            document.getElementById("age").value = data.age;
        }
    };
    xhr.send("regno=" + regno);
});

document.getElementById("regno").addEventListener("input", function() {
  if (this.value.length == 0) {
    document.getElementById("name").value = "";
    document.getElementById("age").value = "";
  }
});

</script>
                
</p>
<p>
<label  class="label-left">Admission Date</label>
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

<h2><label  class="label-left">Ward Detail</label></h2>
<form>
<p tabindex="2">
<label  class="label-left" for="department" > Department </label>
  <?php
  include('departmentselect.php');
  ?>

</p>

<p tablindex="3">
    <label  class="label-left">Unit:<label>
        <input type="number" id="unit" name="unit">
</p>

<p tabindex="4">
<label  class="label-left"> Adm.Dr. </label>
  <?php
  include('admdrselect.php');
  ?>
</p>

<p tabindex="4">
<label  class="label-left" for="wards"> Ward </label>
  <?php
  include('wardselect.php');
  ?>
</p>

<p>
<label  class="label-left" for="show_inputs"> <h4>Refered Case </h4></label>
<input type="checkbox" id="show_inputs">

<div id="reveal_inputs" style="display: none;">
  <label for="refno"> Ref.No.:</label>
  <input type="number" id="refno" name="refno" >
  <label for="refins"> Ref. Institution:</label>
  <input type="text" id="refins" name="refins">
</div>

<script>
  document.getElementById('show_inputs').addEventListener('change', function() {
    var revealInputs = document.getElementById('reveal_inputs');
    if (this.checked) {
        revealInputs.style.display = 'block';
    } else {
        revealInputs.style.display = 'none';
    }
  });
</script>
</p>

<p>
<label  class="label-left"for="show"> <h4>MLC CASE</h4> </label>
<input type="checkbox" id="show">

<div id="reveal" style="display: none;">
  <label for="mlcat"> MLC at:</label>
  <input type="text" id="mlcat" name="mlcat" >
  <label for="mlcrea"> MLC Reason:</label>
  <input type="text" id="mlrea" name="mlrea">
</div>

<script>
  document.getElementById('show').addEventListener('change', function() {
    var revealInputs = document.getElementById('reveal');
    if (this.checked) {
        revealInputs.style.display = 'block';
    } else {
        revealInputs.style.display = 'none';
    }
  });
</script>
</p>
<h2>Patient's details</h5>
<p>
<label class="label-right"> Name: </label> 
<input type = "text" id ="name"  value="" name  = "name"  required />  
<label class="label-right" > Age: </label> 
<input type = "number"  id ="age"  value="" name  = "age"  required/>  
</p>
<p tabindex="">   
 <label class="label-right"> Marital Status: </label> 
 <select name="marstat" id="marstat" >
                   <option value="Married">Married</option>
                   <option value="Unmarried">Unmarried</option>
                   <option value="Divorced">Divorced</option>
                   <option value="Widow">Widow</option>
                  </select>
</p> 

<p>
<label class="label-right"> Religion: </label> 
 <select name="religion" id="religion" >
                   <option value="Hindu">Hindu</option>
                   <option value="Christian">Christian</option>
                   <option value="Muslim">Muslim</option>
                   <option value="Sikh">Sikh</option>
                   <option value="Others">Others</option>
                  </select>
</p>
   
 <label class="label-right"> Kin Relation: </label> 
 <select name="relation" id="relation" >
                   <option value="Father">Father</option>
                   <option value="Mother">Mother</option>
                   <option value="Spouse">Spouse</option>
                   <option value="Brother">Brother</option>
                   <option value="Sister">Sister</option>
                   <option value="Others">Others</option>
                  </select>
</p>
<p>
<label class="label-right">Address</label>
Address line 1:<input type="text" id="ad1" name="ad1">
Address line 2:<input type="text" id="ad2" name="ad2">
</p>
<p>
  <label class="label-right">Mobile</label>
  <input type="number" id="mobile" name="mobile">
  <label class="label-right">Aadhar</label>
  <input type="number" id="aadhar" name="aadhar">
  <label class="label-right">Ration</label>
  <input type="number" id="ration" name="ration">
</p>
<p>
<label class="label-right">Preliminary Diagnosis</label>
  <input type="text" id="prediag" name="prediag">
</p>
<p>
<label class="label-right" for="district">City</label>
  <?php 
   include('city.php');
  ?>
</p>

<p>
<label class="label-right" for="state"> State </label>
  <?php
  include('states.php');
  ?>
</p>

</p>
<p>
<label class="label-right">Occupation</label>
<input type="text" id="occupation" name="occupation">
</p>


<p>
<label class="label-right">Category</label>
<select name="category" id="category" >
                   <option value="General">General</option>
                   <option value="OBC">OBC</option>
                   <option value="EBC">EBC</option>
                   <option value="SC/ST">SC/ST</option>
                   <option value="MBC">MBC</option>
                   <option value="Others">Others</option>
                  </select>
<label class="label-right">Income</label>
<input type="number" id="income" name="income">
</p>
<p>     
                <input type =  "submit" id = "btn" value = "Save Patient"/>  
            </p>
            </form>
<form name="i2" action="showinpatients.php" action="POST">
<p>     
                <input type =  "submit" id = "btn2" value = "Show inpatients"/>  
            </p>

</form>
<form name="i2" action="generateip.php" action="POST">
<p>     
                <input type =  "submit" id = "btn2" value = "Generate"/>  
            </p>
            
</form>


</body>
</html>







  





  


