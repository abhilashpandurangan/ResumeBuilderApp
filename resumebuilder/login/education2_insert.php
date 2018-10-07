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
  if($checkresult->num_rows > 0)
   {
  $query = "UPDATE `education` SET `institute2`='$inst',`degree2`='$degree',`date_from2`='$datefrom',`date_to2`='$dateto',`details2`='$details' WHERE `email_address`  = '$email'";
  $result = mysqli_query($conn,$query);
  }
  else {
    echo 0;

    }
  $conn->close();
  ?>
