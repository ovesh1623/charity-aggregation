<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">

      .pay{
        margin:0;
        padding:0;

      }
      input[type=text]{
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
    </style>
    <title>Payment method</title>
  </head>
  <body>
    <div class="pay">
    <center>
      <h1>PAYMENT GATEWAY</h1>
      <hr>
    <form class="payment" action="http://localhost/hac%20charity/payit1.php?id=<?php $ngoid = $_GET['id'];
    $ngoid = stripcslashes($ngoid); echo "$ngoid" ?>&username=<?php $usernam = $_GET['username'];
    $usernam = stripcslashes($usernam); echo "$usernam" ?>" method="post">
      <br>
      <label for="NGONAME">NGO-NAME: </label>
      <label for="ngoname1">
      <?php   $ngoid = $_GET['id'];
      $ngoid = stripcslashes($ngoid);
      $db_host='localhost';
      $db_root='root';
      $db_password='';
      $db_databasename='charity';
      $conn= new mysqli($db_host,$db_root,$db_password,$db_databasename);
      if( mysqli_connect_error())
      {
        die('CONNECTION ERROR');
      }
      else {
        $sql1 = "SELECT * FROM `ngodetails` WHERE `NGOid`='$ngoid'";
        $resultlog1 = mysqli_query($conn,$sql1);
        $rows = mysqli_fetch_assoc($resultlog1);
        $h=$rows['Ngonam'];
        echo "$h";
        mysqli_free_result($resultlog1);
        mysqli_close($conn);
      }
      ?>
      </label><br />
      <br>
      <label for="Name">NAME: </label>
      <label for="name1">
      <?php
      $nam = $_GET['name'];
      $nam = stripcslashes($nam);
      echo "$nam" ?>
    </label><br><br />
      <label for="Username">USERNAME: </label>
      <label for="username1">
      <?php
      $usernam = $_GET['username'];
      $usernam = stripcslashes($usernam);
      echo "$usernam";?>
    </label><br><br />
      <select name="users">
        <option value="">SELECT DONATION METHOD</option>
        <option value="NSS">Requirements</option>
        <option value="NSS">Cash</option>
      </select>
      <br />
      <label for="items"><?php
      $db_host='localhost';
      $db_root='root';
      $db_password='';
      $db_databasename='charity';
      $conn= new mysqli($db_host,$db_root,$db_password,$db_databasename);
      if( mysqli_connect_error())
      {
        die('CONNECTION ERROR');
      }
      else {
        $ngoid = $_GET['id'];
        $ngoid = stripcslashes($ngoid);
        $sql1 = "SELECT * FROM `ngodetails` WHERE `NGOid`='$ngoid'";
        $resultlog1 = mysqli_query($conn,$sql1);
        $rows = mysqli_fetch_assoc($resultlog1);
        $req1=$rows['Req1'];
        $req2=$rows['Req2'];
        $req3=$rows['Req3'];
        echo "Quantity of donation $req1: ";
        echo "<input type='text' name='r1' />";
        echo "<br />";
        echo "Quantity of donation $req2: ";
        echo "<input type='text' name='r2' />";
        echo "<br />";
        echo "Quantity of donation $req3: ";
        echo "<input type='text' name='r3' />";
        mysqli_free_result($resultlog1);
        mysqli_close($conn);
      }
      ?>
      </label>
      <br>
      CASH: <input type="text" name="cashpaid" />
      <br>
      <br>
      <input type="submit" value="Confirm Payment">
    </form
      </center>
    </div>
  </body>
</html>
