<?php
  session_start();
  include_once("config/config.php");

  $conn = new mysqli($servername,$username,$password,$dbname);

  if($conn->error){

    die("Connection Unsuccessful" . $conn->error );

  }
  $flag = 0;
  $email=trim($_POST['email']);
  $password =sha1(trim($_POST['password']));
  $checkquery = "SELECT email,username,phone FROM user_table WHERE email='$email' and password = '$password'";
  $result = mysqli_query($conn,$checkquery);

  if(mysqli_num_rows($result) > 0){
    $flag =1;
    $row = $result->fetch_assoc();
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $row['username'];
    $_SESSION['phone'] = $row['phone'];
  }

  if($flag == 1){
    echo 1;

  }

  else{

    echo 0;
  }

  $conn->close();

?>
