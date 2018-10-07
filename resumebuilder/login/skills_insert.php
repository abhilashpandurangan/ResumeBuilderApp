<?php

  include_once("../config/config.php");

  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->error){

    die("Connection Unsuccessful" . $conn->error );

  }
  $skills=trim($_POST['skills']);
  $hb=trim($_POST['hb']);
  $ec=trim($_POST['ec']);
  $email=trim($_POST['email']);
  $checkquery = "SELECT email_address from skills where email_address = '$email'";
  $checkresult = mysqli_query($conn,$checkquery);
  if($checkresult->num_rows == 0)
   {
  $query = "INSERT INTO `skills`(`skills`,`hobbies`,`extra`,`email_address`) VALUES ('$skills','$hb','$ec','$email')";
  $result = mysqli_query($conn,$query);
  }
  else {
    $query = "UPDATE `skills` SET `skills`='$skills',`hobbies`='$hb',`extra`='$ec' WHERE `email_address`='$email'";
    $result = mysqli_query($conn,$query);
  }
  $conn->close();
  ?>
