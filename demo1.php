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
$ngoid = 10001;
  $sql1 = "SELECT * FROM `ngodetails` WHERE `NGOid`='$ngoid'";
  $resultlog1 = mysqli_query($conn,$sql1);
  $rows = mysqli_fetch_assoc($resultlog1);
  $h=$rows['Ngonam'];
  echo "$h";
  mysqli_free_result($resultlog1);
  mysqli_close($conn);
}

 ?>
