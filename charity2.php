<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>SIGN UP FORM</title>
  <style>
  input[type=text]{
    width: 20%;
    padding: 2px 2px;
    margin: 5px 0;
    border:none;
    border-bottom: 2px solid red;
  }
  input[type=password] {
    width: 20%;
    padding: 2px 2px;
    margin: 5px 0;
    border:none;
    border-bottom: 2px solid red;
  }
  input[type=email] {
    width: 20%;
    padding: 2px 2px;
    margin: 5px 0;
    border:none;
    border-bottom: 2px solid red;
  }
  body{
    background-color:#F9DAD3;
  }
  a{
    text-decoration: none;
    color:black;
    background-color: white;
    padding:5px;
  }
  </style>
</head>

<body style="text-align:center;">
  <h1>SIGN UP FORM</h1>
  <hr>
  <form action="http://localhost/hac%20charity/connect1.php?ngoid=<?php   $ngoid = $_GET['ngoid'];
    $ngoid = stripcslashes($ngoid); echo "$ngoid"; ?>" method="POST">
    NAME:<br>
    <input type="text" name="name" required>
    <br>
    USERNAME:<br>
    <input type="text" name="username" required>
    <br>
    PASSWORD:<br>
    <input type="password" name="password" maxlength="10" required>
    <br>
    EMAIL ID:<br>
    <input type="email" name="email" required>
    <br>
    PHONE NO:<br>
    <input type="text" name="phoneno">
    <br><br>
    <button type="submit" name="button"> Submit </button>
    <br><br>
    Already have an account?<a href="http://localhost/hac%20charity/charity.php?ngoid=<?php   $ngoid = $_GET['ngoid'];
      $ngoid = stripcslashes($ngoid); echo "$ngoid"; ?>"><b>LOG IN</b></a>
  </form>
</body>

</html>
