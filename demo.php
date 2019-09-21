<?php
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
  $sql1 = "SELECT `Cash Paid` FROM `payments details` WHERE `Transaction ID`='78' AND `USername`='ovi'";

  $resultlog1 = mysqli_query($conn,$sql1);
  $rows = mysqli_fetch_assoc($resultlog1);
  $h=$rows['Cash Paid'];
  echo "$h";
  mysqli_free_result($resultlog1);
  mysqli_close($conn);
}
?>
