<?php

  include_once("../config/config.php");

  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->error){

    die("Connection Unsuccessful" . $conn->error );

  }
  $comp = trim($_POST['comp']);
  $desig  = trim($_POST['desig']);
  $datef = trim($_POST['datef']);
  $datet = trim($_POST['datet']);
  $details =trim($_POST['details']);
  $email = $_POST['email'];
  $checkquery = "SELECT email_address from exp_details where email_address = '$email'";
  $checkresult = mysqli_query($conn,$checkquery);
  if($checkresult->num_rows == 0)
   {
  $query = "INSERT INTO `exp_details`(`company1`, `design1`, `datefrom1`, `dateto1`, `details1`, `company2`, `design2`, `datefrom2`, `dateto2`, `details2`, `email_address`) VALUES ('$comp','$desig','$datef','$datet','$details','null','null','null','null','null','$email')";
  $result = mysqli_query($conn,$query);
  }
  else {
    $query="UPDATE `exp_details` SET `company1`= '$comp',`design1`= '$desig',`datefrom1`= '$datef',`dateto1`= '$datet',`details1`= '$details' WHERE `email_address`  = '$email'";
    $result = mysqli_query($conn,$query);
  }
  $conn->close();
  ?>
