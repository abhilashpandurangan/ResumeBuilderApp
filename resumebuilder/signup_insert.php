<?php

  include_once("config/config.php");

  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->error){

    die("Connection Unsuccessful" . $conn->error );

  }
  $flag = 0;
  $email=trim($_POST['email']);

  $checkquery = "SELECT email FROM user_table WHERE email='$email'";
  $checkresult = mysqli_query($conn,$checkquery);

  if($checkresult->num_rows>0){
    $flag =1;
  }

  if($flag == 1){

    echo 1;

  }

  else{

    $name=trim($_POST['name']);
    $gender=trim($_POST['gender']);
    $password=trim($_POST['password']);
    $email=trim($_POST['email']);
    $phone=trim($_POST['phone']);
    $pass=sha1($password);

    $sql="INSERT INTO `user_table` (`username`, `gender`, `password`, `email`, `phone`) VALUES ('$name','$gender','$pass','$email','$phone')";

    $result = mysqli_query($conn,$sql);

    echo 0;
  }

  $conn->close();

?>
