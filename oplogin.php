<!DOCTYPE html>
<html>
<head>
  <title>OUT-PATIENT COUNTER LOGIN</title>
</head>
<body>
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
      input[type="password"] {
        width: 300px;
        height: 30px;
        font-size: 25px;
      }
      input[type="submit"]{
        width: 200px;
        height: 30px;
        font-size: 20px;
        font-family: 'Raleway', sans-serif;
      }
      </style>
      <center>
        <br><br><br><br>
  <form action="oplogin_back.php" method="post">
    <h1>LOGIN PAGE</h1>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Submit">
    </form>
  </form>
</body>
</html>
