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
  if($checkresult->num_rows > 0)
   {
  $query = "UPDATE `exp_details` SET `company2`= '$comp',`design2`= '$desig',`datefrom2`= '$datef',`dateto2`= '$datet',`details2`= '$details' WHERE `email_address`  = '$email'";
  $result = mysqli_query($conn,$query);
  }
  else {
    echo 0;

    }
  $conn->close();
  ?>
