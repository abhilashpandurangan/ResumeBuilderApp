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
  $user= $_SESSION['username'];
  $conn->close();

?>

<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <script>var em = <?php echo json_encode($email); ?>;</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
          .registration_title{
            text-align: center;
          }
          .page_container{
          min-height : 80 vh;
          padding: 20px;
          }
        </style>
        <!--link to js file -->
        <script type="text/javascript" src="user.js"></script>

        <title>Resume Builder</title>

  </head>

  <body class="">

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
          <li><a href="resume.php">Resume</a></li>
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
      It offers many easy to use features that are free to use.Developed by Abhilash.P
    </p>
  </div>
</div>
<!--container -->
<div class="container">
<div class="row">
    <div class="col s12">
      <ul class="tabs amber accent-3 ">
        <li class="tab col s3"><a class="active"  href="#test1">Contact Information</a></li>
        <li class="tab col s3"><a href="#test2">Education</a></li>
        <li class="tab col s3 "><a href="#test3">Experience</a></li>
        <li class="tab col s3"><a href="#test4">Skills</a></li>
      </ul>
    </div>
    <!--tab1-->
    <div id="test1" class="col s12">

      <div class="card">
       <div class="card-title">Contact Details</div>
       <div class ="card content">
      <div class="row">
       <div class="col s12">
         <div class="row">
         <div class="input-field col s6">
           <i class="material-icons prefix">account_circle</i>
           <input id="f_name" type="text" class="validate">
           <label for="f_name">First Name</label>
         </div>
         <div class="input-field col s6">
           <i class="material-icons prefix">account_circle</i>
           <input id="l_name" type="text" class="validate">
           <label for="l_name">Last Name</label>
         </div>
      </div>
        <div class="row">
         <div class="input-field col s6">
           <i class="material-icons prefix">phone</i>
           <input id="phone" type="tel" class="validate">
           <label for="phone">Phone Number</label>
         </div>
         <div class="input-field col s6">
           <i class = "material-icons prefix">mail_outline</i>
           <input type = "email" id = "email" class = "validate"/>
           <label for = "email">Email</label>
         </div>
       </div>

       <div class="row">
        <div class="col s12">
         <div class="row">
           <div class="input-field col s10">
            <i class="material-icons prefix">home</i>
             <textarea id="address" class="materialize-textarea" data-length="120"></textarea>
            <label for="address">Address</label>
          </div>
        </div>
      </div>
     </div>

     </div>
    </div>
    <div class="card-action">
          <button class = "btn waves-effect waves-light  white-text text-darken-2" onClick="contact_submit()">Submit</button>
    </div>
   </div>

    </div>
</div>


    <!--tab2-->
    <div id="test2" class="col s12">
     <div class="card">
      <div class="card-title">Education Details</div>

  <div class ="card content" id="first_edu">
   <div class="row">
   <div class="col s12">
     <div class="row">
       <div class="input-field col s10">
         <i class="material-icons prefix">account_circle</i>
         <input id="inst_1" type="text" class="validate">
         <label for="inst_1">Institute</label>
       </div>
    </div>

      <div class="row">
       <div class="input-field col s6">
         <i class="material-icons prefix">school</i>
         <input id="degree_1" type="text" class="validate">
         <label for="degree_1">Degree/Grade</label>
       </div>
       <div class="input-field col s3">
            <i class="material-icons prefix">insert_invitation</i>
         <input id="datefrom1" type="text" placeholder="month<space>yyyy">
         <label for="datefrom1">Date From:</label>
       </div>
       <div class="input-field col s3">
           <i class="material-icons prefix">insert_invitation</i>
         <input id="dateto1" type="text" placeholder="month<space>yyyy" >
         <label for="dateto1">Date To:</label>
       </div>
     </div>

     <div class="row">
       <div class="col s12">
        <div class="row">
         <div class="input-field col s10">
           <i class="material-icons prefix">home</i>
           <textarea id="details_1" class="materialize-textarea" data-length="120"></textarea>
           <label for="details_1">Details</label>
         </div>
       </div>
     </div>
    </div>

    </div>
   </div>
   <div class="card-action">
         <button class = "btn waves-effect waves-light  white-text text-darken-2" onClick="education1_submit()">Submit</button>
   </div>
  </div>

  <div class ="card content">
   <div class="row">
   <div class="col s12">
     <div class="row">
       <div class="input-field col s10">
         <i class="material-icons prefix">account_circle</i>
         <input id="inst_2" type="text" class="validate">
         <label for="inst_2">Institute</label>
       </div>
    </div>

      <div class="row">
       <div class="input-field col s6">
         <i class="material-icons prefix">school</i>
         <input id="degree_2" type="text" class="validate">
         <label for="degree_2">Degree/Grade</label>
       </div>
       <div class="input-field col s3">
            <i class="material-icons prefix">insert_invitation</i>
         <input id="datefrom2" type="text" placeholder="month<space>yyyy">
         <label for="datefrom2">Date From:</label>
       </div>
       <div class="input-field col s3">
           <i class="material-icons prefix">insert_invitation</i>
         <input id="dateto2" type="text" placeholder="month<space>yyyy" >
         <label for="dateto2">Date To:</label>
       </div>
     </div>

     <div class="row">
       <div class="col s12">
        <div class="row">
         <div class="input-field col s10">
           <i class="material-icons prefix">home</i>
           <textarea id="details_2" class="materialize-textarea" data-length="120"></textarea>
           <label for="details_2">Details</label>
         </div>
       </div>
     </div>
    </div>
    </div>
   </div>
   <div class="card-action">
         <button class = "btn waves-effect waves-light  white-text text-darken-2" onClick="education2_submit()">Submit</button>
   </div>

  </div>

  </div>

  </div>
  <!--tab 3 -->
    <div id="test3" class="col s12">
      <div class="card">
       <div class="card-title">Experience Details</div>
       <div class ="card content" id="exp1">
      <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s10">
            <i class="material-icons prefix">account_circle</i>
            <input id="comp1" type="text" class="validate">
            <label for="comp1">Company</label>
          </div>
       </div>

         <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">assignment_ind</i>
            <input id="desig1" type="text" class="validate">
            <label for="desig1">Designation</label>
          </div>
          <div class="input-field col s3">
            <i class="material-icons prefix">insert_invitation</i>
            <input id="datef1" type="text" placeholder="month<space>yyyy">
            <label for="datef1">Date From:</label>
          </div>
          <div class="input-field col s3">
            <i class="material-icons prefix">insert_invitation</i>
            <input id="datet1" type="text" placeholder="month<space>yyyy" >
            <label for="datet1">Date To:</label>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
           <div class="row">
            <div class="input-field col s10">
              <i class="material-icons prefix">home</i>
              <textarea id="dt1" class="materialize-textarea" data-length="120"></textarea>
              <label for="dt1">Details</label>
            </div>
          </div>
        </div>
      </div>
       </div>
      </div>
      <div class="card-action">
            <button class = "btn waves-effect waves-light  white-text text-darken-2" onClick="exp1_submit()">Submit</button>
      </div>

     </div>


     <div class ="card content">
    <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s10">
          <i class="material-icons prefix">account_circle</i>
          <input id="comp2" type="text" class="validate">
          <label for="comp2">Company</label>
        </div>
     </div>

       <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">assignment_ind</i>
          <input id="desig2" type="text" class="validate">
          <label for="desig2">Designation</label>
        </div>
        <div class="input-field col s3">
          <i class="material-icons prefix">insert_invitation</i>
          <input id="datef2" type="text" placeholder="month<space>yyyy">
          <label for="datef2">Date From:</label>
        </div>
        <div class="input-field col s3">
          <i class="material-icons prefix">insert_invitation</i>
          <input id="datet2" type="text" placeholder="month<space>yyyy" >
          <label for="datet2">Date To:</label>
        </div>
      </div>

      <div class="row">
        <div class="col s12">
         <div class="row">
          <div class="input-field col s10">
            <i class="material-icons prefix">home</i>
            <textarea id="dt2" class="materialize-textarea" data-length="120"></textarea>
            <label for="dt2">Details</label>
          </div>
        </div>
      </div>
     </div>
     </div>
    </div>
    <div class="card-action">
          <button class = "btn waves-effect waves-light  white-text text-darken-2" onClick="exp2_submit()">Submit</button>
    </div>

   </div>




   </div>
</div>

  <!--SKills -->
  <div id="test4" class="col s12">
    <div class="card">
     <div class="card-title">Skills/Hobbies</div>

 <div class ="card content">
  <div class="row">
  <div class="col s12">


    <div class="row">
      <div class="col s12">
       <div class="row">
        <div class="input-field col s10">
          <i class="material-icons prefix">build</i>
          <textarea id="skills" class="materialize-textarea" data-length="200" placeholder="Enter your skills like PHP(Intermediate)<enter>HTML(beginner)"></textarea>
          <label for="skills">Skills</label>
        </div>
      </div>
    </div>
   </div>

   <div class="row">
     <div class="col s12">
      <div class="row">
       <div class="input-field col s10">
         <i class="material-icons prefix">casino</i>
         <textarea id="hb" class="materialize-textarea" data-length="120" placeholder="Enter your hobbies like blogging<enter>swimming"></textarea>
         <label for="hb">Hobbies</label>
       </div>
     </div>
   </div>
  </div>

  <div class="row">
    <div class="col s12">
     <div class="row">
      <div class="input-field col s10">
        <i class="material-icons prefix">directions_run</i>
        <textarea id="ec" class="materialize-textarea" data-length="120"></textarea>
        <label for="ec">Extra Curricular</label>
      </div>
    </div>
  </div>
 </div>
   </div>
  </div>
  <div class="card-action">
        <button id="sub" class = "btn waves-effect waves-light  white-text text-darken-2" onClick="skills_submit()">Submit</button>
        <button id="resume" class = "btn waves-effect waves-light red  white-text text-darken-2 hide" onclick="window.location.href='resume.php'">RESUME</button>
  </div>
 </div>

</div>
 </div>

<!--tab over-->








  </div>
</div>


<!--footer-->
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
