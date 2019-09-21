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
  $req1 = $_POST['r1'];
  $req2 = $_POST['r2'];
  $req3 = $_POST['r3'];
  $cashpaid = $_POST['cashpaid'];
  $req1 = stripcslashes($req1);
  $req2 = stripcslashes($req2);
  $req3 = stripcslashes($req3);
  $cashpaid = stripcslashes($cashpaid);
  $username = $_GET['username'];
  $username = stripcslashes($username);
  $ngoid = $_GET['id'];
  $ngoid = stripcslashes($ngoid);
  $sql1 = "SELECT * FROM `ngodetails` WHERE `NGOid`='$ngoid'";
  $resultlog1 = mysqli_query($conn,$sql1);
  $rows = mysqli_fetch_assoc($resultlog1);
  $cashpaid1= $rows['Cash']-$cashpaid;
  $ngoname=$rows['Ngonam'];
  $sql = "UPDATE `ngodetails` SET `Cash`= '$cashpaid1' WHERE `NGOid`= '$ngoid'";
  $resultlog = mysqli_query($conn, $sql) or die("Unsuccessful query prossing " .mysqli_error($conn));
  $sql2 = "INSERT INTO `payments details` (`Transaction ID`, `Username`, `Ngoid`, `Ngoname`, `req1`, `req2`, `req3`, `Cash Paid`) VALUES (NULL, '$username', '$ngoid', '$ngoname', '$req1', '$req2', '$req3', '$cashpaid');";
  if(mysqli_query($conn,$sql2))
  {
    $to = "aayushishah1999@gmail.com";
    $subject = "CONFIRMATION OF YOUR DONATION";
    $message = "Dear '$username' we are very thankful for your generous donation and this message is to confirm that the money you have donated is successfully reached the NGO '$ngoname'.";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <oveshpatel16@gmail.com>' . "\r\n";

    mail($to,$subject,$message,$headers);
    header("Location: http://localhost/hac%20charity/payit.php?username=$username&ngoname=$ngoname&cash=$cashpaid");
    $result->close();
    $conn->close();
  }
  else {
    echo "Unsuccessful";
  }

}
 ?>
