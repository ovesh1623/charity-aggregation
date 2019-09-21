<?php
$Name = $_POST['name'];
$Username = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Phoneno = $_POST['phoneno'];
if(!empty($Username) || !empty($Phoneno) || !empty($Password) || !empty($Email) || !empty($Name))
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
    $result = "INSERT INTO `user detail` (`Name`, `Username`, `Password`, `Email id`, `Phone no`) VALUES ('$Name', '$Username'  , '$Password' , '$Email' , '$Phoneno');";
    if(mysqli_query($conn,$result))
    {
        $ngoid = $_GET['ngoid'];
        $ngoid = stripcslashes($ngoid);
      header("Location: http://localhost/hac%20charity/charity.php?ngoid=$ngoid");
      $result->close();
      $conn->close();
    }
    else {
      echo "Unsuccessful";
    }
  }
}
else {
  echo 'Enter all the details';
  die();
}
?>
