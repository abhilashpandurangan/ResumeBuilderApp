<?php

  include_once("../config/config.php");

  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->error){

    die("Connection Unsuccessful" . $conn->error );

  }
  $fname=trim($_POST['fname']);
  $lname=trim($_POST['lname']);
  $phone=trim($_POST['phone']);
  $address=trim($_POST['address']);
  $email=trim($_POST['email']);
  $checkquery = "SELECT email_address from contact where email_address = '$email'";
  $checkresult = mysqli_query($conn,$checkquery);
  if($checkresult->num_rows == 0)
   {
  $query = "INSERT INTO `contact`(`first_name`, `last_name`, `phone_number`, `email`, `address`, `email_address`) VALUES ('$fname','$lname','$phone','$email','$address','$email')";
  $result = mysqli_query($conn,$query);
  }
  else {
    $query = "UPDATE `contact` SET `first_name`='$fname',`last_name`='$lname',`phone_number`='$phone',`email`='$email',`address`='$address' WHERE `email_address`='$email'";
    $result = mysqli_query($conn,$query);
  }
  $conn->close();
  ?>
