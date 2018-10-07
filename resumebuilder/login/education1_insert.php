<?php

  include_once("../config/config.php");

  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->error){

    die("Connection Unsuccessful" . $conn->error );

  }
  $inst=trim($_POST['inst']);
  $degree=trim($_POST['degree']);
  $datefrom=trim($_POST['datefrom']);
  $dateto=trim($_POST['dateto']);
  $details=trim($_POST['details']);
  $email = $_POST['email'];
  $checkquery = "SELECT email_address from education where email_address = '$email'";
  $checkresult = mysqli_query($conn,$checkquery);
  if($checkresult->num_rows == 0)
   {
  $query = "INSERT INTO `education`(`institute1`, `degree1`, `date_from1`, `date_to1`, `details1`, `institute2`, `degree2`, `date_from2`, `date_to2`, `details2`, `email_address`) VALUES ('$inst','$degree','$datefrom','$dateto','$details','null','null','null','null','null','$email')";
  $result = mysqli_query($conn,$query);
  }
  else {
    $query="UPDATE `education` SET `institute1`='$inst',`degree1`='$degree',`date_from1`='$datefrom',`date_to1`='$dateto',`details1`='$details' WHERE `email_address`  = '$email'";
    $result = mysqli_query($conn,$query);
  }
  $conn->close();
  ?>
