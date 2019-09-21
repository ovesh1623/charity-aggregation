<?php
$user = $_POST['username1'];
$pass = $_POST['password1'];
$user = stripcslashes($user);
$pass = stripcslashes($pass);
$ngoid = $_GET['ngoid'];
$ngoid = stripcslashes($ngoid);

if(!empty($user) || !empty($pass))
{
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
    echo "$user $pass";
    $sql = "SELECT `Name`, `Username`, `Password` FROM `user detail` WHERE `Username` = '$user' AND `Password` = '$pass'";
    $resultlog = mysqli_query($conn, $sql) or die("Unsuccessful query prossing " .mysqli_error($conn));
    if(mysqli_num_rows($resultlog)==1){
      $rows=mysqli_fetch_assoc($resultlog);
      $name = $rows['Name'];
      $username = $rows['Username'];
      echo "$req1";
      header("Location: http://localhost/hac%20charity/payment.php?name=$name&username=$username&id=$ngoid");
      $result->close();
      $conn->close();
    }
    else {
      echo "Invalid Username or password";
    }
  }
}
 ?>
