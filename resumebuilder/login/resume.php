<?php

  session_start();

  if(!isset($_SESSION['email'])){

    header("Location:../index.php");

  }

  include_once("../config/config.php");

  $conn = new mysqli($servername,$username,$password,$dbname);
  if($conn->error){

    die("Connection Unsuccessful" . $conn->error);

  }

  $email = $_SESSION['email'];
  $sql1 = "SELECT `first_name`, `last_name`, `phone_number`, `email`, `address` FROM `contact` WHERE email_address = '$email'";
  $user= $_SESSION['username'];
  $result = mysqli_query($conn,$sql1);
  if($result->num_rows > 0){

		$row = $result->fetch_assoc();
		$fname = $row['first_name'];
    $lname = $row['last_name'];
    $phone = $row['phone_number'];
    $address = $row['address'];

	}
  $sql2 = "SELECT `institute1`, `degree1`, `date_from1`, `date_to1`, `details1`, `institute2`, `degree2`, `date_from2`, `date_to2`, `details2` FROM `education` WHERE email_address = '$email'";
  $result = mysqli_query($conn,$sql2);
  if($result->num_rows > 0){

		$row = $result->fetch_assoc();
		$institute1 = $row['institute1'];
    $degree1 = $row['degree1'];
    $date_from1 = $row['date_from1'];
    $date_to1 = $row['date_to1'];
    $details1 = $row['details1'];
    $institute2 = $row['institute2'];
    $degree2 = $row['degree2'];
    $date_from2 = $row['date_from2'];
    $date_to2 = $row['date_to2'];
    $details2 = $row['details2'];

	}
  $sql3 = "SELECT `skills`, `hobbies`, `extra` FROM `skills` WHERE `email_address` = '$email'";
  $result = mysqli_query($conn,$sql3);
  if($result->num_rows > 0){

		$row = $result->fetch_assoc();
    $skill = $row['skills'];
    $hb = $row['hobbies'];
    $ex = $row['extra'];
	}
  $sql4 = "SELECT `company1`, `design1`, `datefrom1`, `dateto1`, `details1`, `company2`, `design2`, `datefrom2`, `dateto2`, `details2`, `email_address` FROM `exp_details` WHERE `email_address` = '$email'";
  $result = mysqli_query($conn,$sql4);
  if($result->num_rows > 0){

		$row = $result->fetch_assoc();
    $comp1 = $row['company1'];
    $desig1 = $row['design1'];
    $datef1 = $row['datefrom1'];
    $datet1 = $row['dateto1'];
    $dt1 = $row['details1'];
    $comp2 = $row['company2'];
    $desig2 = $row['design2'];
    $datef2 = $row['datefrom2'];
    $datet2 = $row['dateto2'];
    $dt2 = $row['details2'];
	}
  $conn->close();

?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
          .registration_title{
            text-align: center;
            padding: 3px;
          }
          .page_container{
          min-height : 80 vh;
          }
        </style>
        <!--link to js file -->
        <script type="text/javascript" src="resume.js"></script>

        <title>Resume Builder</title>

  </head>

  <body>
    <!--nav bar -->
    <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper  amber darken-2">
        <a href="#" class="brand-logo hide-on-med-and-down">
        <i class="material-icons">web</i>Resume Builder</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#" class=""><h5>Hi <?php echo $user; ?>!</h5></a></li>
          <li><a href="../logout.php">Logout</a></li>
          <li><a href="#modal2" class="modal-trigger">About Us</a></li>
          <li><a href="user.php">Edit</a></li>
       </ul>
      </div>
    </nav>
  </div>
  <!--nav over -->

  <!--modal-->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>About Us</h4>
      <p>
        Resume builder is an online portal for building resume on the go using simple forms.
        It offers many easy to use features that are free to use. Developed by Abhilash.P
      </p>
    </div>
  </div>
  <!--container -->
  <div class="container">
    <div class="card content">
      <div class = "card-title amber darken-2 white-text registration_title z-depth-2">
        <h4>RESUME</h4>
      </div>
     <div class = "cyan lighten-5" id="printableArea">
     <?php
     if(isset($fname))
     {
     echo "<h4>".$fname." ";
     echo $lname."</h4>";
     echo "<hr>";
     echo "<br>"."Email: ".$email;
     echo "<br>"."Ph: ".$phone;
     echo "<br>"."Address: ".$address;
     echo "<br>"."<hr><hr>";
     }
     if(isset($institute1))
     {
     echo "<h4>"."Education"."</h4>";
     echo "<hr>";
     echo "<div>"."<h5>".$institute1."</h5>"."</div>"."<div class=\"row\">";
     echo "<div class=\"col s2\">".$degree1."</div>";
     echo "<div class=\"offset-s6 col s4\">".$date_from1." to ".$date_to1."</div> </div>";
     echo "<div>".$details1."</div>";
     echo "<hr>";
     echo "<div>"."<h5>".$institute2."</h5>"."</div>"."<div class=\"row\">";
     echo "<div class=\"col s2\">".$degree2."</div>";
     echo "<div class=\"offset-s6 col s4\">".$date_from2." to ".$date_to2."</div> </div>";
     echo "<div>".$details2."</div>"."<hr><hr>";
   }
    if(isset($comp1)){
      echo "<h4>"."Experience"."</h4>";
      echo "<hr>";
      echo "<div>"."<h5>".$comp1."</h5>"."</div>"."<div class=\"row\">";
      echo "<div class=\"col s3\">".$desig1."</div>";
      echo "<div class=\"offset-s5 col s4\">".$datef1." to ".$datet1."</div> </div>";
      echo "<div>".$dt1."</div>";
      echo "<hr>";
      echo "<div>"."<h5>".$comp2."</h5>"."</div>"."<div class=\"row\">";
      echo "<div class=\"col s3\">".$desig2."</div>";
      echo "<div class=\"offset-s5 col s4\">".$datef2." to ".$datet2."</div> </div>";
      echo "<div>".$dt2."</div>"."<hr><hr>";
    }
    if (isset($skill)) {
       echo "<h4>"."Skills"."</h4>";
       echo "<div>".$skill."</div>"."<hr><hr>";
       echo "<h4>"."Hobbies"."</h4>";
       echo "<div>".$hb."</div>";
       echo "<hr><hr>"."<h4>"."Extra Curricular"."</h4>";
       echo "<div>".$ex."</div>"."<hr><hr>";
     }
     ?>

   </div>
     <div class="card-action">
     <button class = "btn waves-effect waves-light  white-text text-darken-2" onclick="printDiv('printableArea')">Print</button>
   </div>

   </div>
  </div>








    <footer class="page-footer  amber darken-2">
      <div class="container">
                 <div class="row">
                   <div class="col l6 s12">
                     <h5 class="white-text">Resume Builder</h5>
                     <p class="grey-text text-lighten-4">An online portal for building resume on the go.</p>
                   </div>
                   <div class="col l4 offset-l2 s12">
                     <h5 class="white-text">Features</h5>
                     <ul>
                       <li><a class="grey-text text-lighten-3" href="">Online Resume</a></li>
                       <li><a class="grey-text text-lighten-3" href="">Free of cost</a></li>
                       <li><a class="grey-text text-lighten-3" href="">Quick Resume</a></li>
                    </ul>
                   </div>
                 </div>
               </div>
               <div class="footer-copyright">
                 <div class="container">
                 © 2018 Abhilash Tech
                 </div>
               </div>
    </footer>
       <script type="text/javascript" src="../js/materialize.min.js"></script>

     </body>
   </html>
