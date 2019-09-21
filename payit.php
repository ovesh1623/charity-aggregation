<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h1>RECEIPT</h1>
      <hr>
      <label for="username">USERNAME:   </label>
      <label for="usernam"><?php
      $username = $_GET['username'];
      $username = stripcslashes($username);
      echo "$username";
       ?></label>
       <br><br>
      <?php
      $ngoname = $_GET['ngoname'];
      $ngoname = stripcslashes($ngoname);
      $cash = $_GET['cash'];
      $cash = stripcslashes($cash);
      $credits = $cash/100;
       ?>
       <label for="ngonam">NGO-NAME:   </label>
       <label for="ngonam"><?php echo "$ngoname"; ?></label>
       <br><br>
       <label for="cash">AMOUNT-PAID:   </label>
       <label for="cash1"><?php echo "$cash"; ?></label>
       <br><br>
       <label for="credits">CREDITS RECEVIED</label>
       <label for="credit1"><?php echo "$credits points"; ?></label>

    </center>
  </body>
</html>
