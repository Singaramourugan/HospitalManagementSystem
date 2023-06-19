<html>
    <title>Registration Page</title>
    <body>
    <style>
      body {
        background-image: url(https://t3.ftcdn.net/jpg/03/55/60/36/360_F_355603615_RIj4qlSqmD47AOiWLbBU1qg58WN4raS9.jpg);
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
        width: 250px;
        height: 30px;
        font-size: 25px;
        font-family: 'Raleway', sans-serif;
      }
input[type="email"] {
        width: 250px;
        height: 30px;
        font-size: 25px;
        font-family: 'Raleway', sans-serif;
      }
      input[type="password"] {
        width: 250px;
        height: 30px;
        font-size: 25px;
        
      }
      select, input[type="date"] {
        width: 250px;
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
    <center>
    <form action="register_back.php" method="post">
        <br>
        <br>
        <br>
        <h2>REGISTRATION PAGE</h2>
        

  <label for="name">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>

  <label for="name">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>

  <label for="name">Username:</label>
  <input type="text" id="username" name="username"><br><br>

  


  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>

  <label for="mobile">Mobile Number:</label>
  <input type="text" id="mobile" name="mobile"><br><br>

  <label for="name">Password:</label>
  <input type="password" id="password" name="password"><br><br>


  <input type="submit" value="Submit">
</form>
    </center>
</body>

