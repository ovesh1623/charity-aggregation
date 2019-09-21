<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login page</title>
    <style>
    input[type=text]{
      width: 20%;
      padding: 2px 2px;
      margin: 5px 0;
      border:none;
      border-bottom: 2px solid red;
    }
    input[type=password]{
      width: 20%;
      padding: 2px 2px;
      margin: 5px 0;
      border:none;
      border-bottom: 2px solid red;
}
    body{
      background-color: #F9DAD3;

    }
    a{
      text-decoration: none;
      color:black;
      background-color: white;
      padding:5px;
    }
    input[type=submit]{
      background-color: white;
    }
    </style>
  </head>
  <body  style="text-align:center";>
    <h1>Login Form</h1>
    <hr>
    <br>
    <form method="POST" action="http://localhost/hac%20charity/login.php?ngoid=<?php   $ngoid = $_GET['ngoid'];
      $ngoid = stripcslashes($ngoid); echo "$ngoid"; ?>">
      USERNAME:
      <input type="text" name="username1" placeholder="username">
      <br>
      <br>
      PASSWORD:
      <input type="password" name="password1" placeholder="password">
      <br>
      <br>
      <input type="submit" value="submit">
      <br>
      <br>
       <a href="http://localhost/hac%20charity/charity2.php?ngoid=<?php   $ngoid = $_GET['ngoid'];
         $ngoid = stripcslashes($ngoid); echo "$ngoid"; ?>" ><b>Sign up</b></a>
    </form>
  </body>
</html>
