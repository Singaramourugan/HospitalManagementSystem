<html>
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#department").change(function() {
        var deptname = $(this).val();
        $.ajax({
          type: "GET",
          url: "get_details.php",
          data: { deptname: deptname },
          dataType: "json",
          success: function(data) {
            $("#unitname").val(data.unitname);
            $("#unitnumber").val(data.unitnumber);
            $("#doctorname").val(data.doctorname);
          }
        });
      });
    });
  </script>
</head>
<body>
  <?php
   include('connection.php');
    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT deptcode, deptname FROM department";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
      echo "<select id='department'>";
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row["deptcode"] . "'>" . $row["deptname"] . "</option>";
      }
      echo "</select>";
    } else {
      echo "0 results";
    }
    mysqli_close($con);
  ?>
  <br>
  <label>Unit name</label>
  <input type="text" id="unitname">
  <br>
  <label>Unit number</label>
  <input type="number" id="unitnumber">
  <br>
  <label>Doctor Name</label>
  <input type="text" id="doctorname">
</body>
</html>
