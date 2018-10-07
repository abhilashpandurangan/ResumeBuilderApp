<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
          .registration_title{
            padding: 20px;
          }
          .page_container{
          min-height : 80 vh;
          padding: 20px;
          }
          body {
    background-image: url("images/resume.jpg");
}
        </style>
        <!--link to js file -->
        <script type="text/javascript" src="signup.js"></script>

        <title>Resume Builder</title>

  </head>

  <body >

    <!--nav bar -->
    <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper  amber darken-2">
        <a href="#" class="brand-logo hide-on-med-and-down">
        <i class="material-icons">web</i>Resume Builder</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php" class="modal-trigger">Home</a></li>
          <li><a href="#modal2" class="modal-trigger">About Us</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <!--nav over -->

<div class=" container page-container">

  <!-- REGISTRATION FORM STARTS HERE -->

   <div class = "row">

     <div class = "col s12 l8 offset-l2">

       <div class = "card z-depth-5">

         <div class = "card-title amber darken-2 white-text registration_title z-depth-2">

           <h5>SIGN UP</h5>

         </div>

         <div class = "card-content">


           <div class = "row">
            <!--NAME-->
             <div class = "input-field col s12 l6">

               <i class = "material-icons prefix">person</i>
               <input type = "text" id = "name" class = "validate"/>
               <label for = "name">Username</label>

             </div>
            <!--GENDER-->
             <div class = "input-field col s12 l6">
               <i class = "material-icons prefix">person</i>

              <select id="gender">
              <option value="" disabled selected >Choose Gender </option>option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Others">Other</option>
              </select>
               <label for = "gender">Gender </label>

             </div>

           </div>

           <div class = "row">
             <!--PASSWORD-->
             <div class = "input-field col s12 l6">

               <i class = "material-icons prefix">lock</i>
               <input type = "password" id = "password_1" class = "validate"/>
               <label for = "password_1">Password</label>

             </div>
             <!--CONFIRM-->
             <div class = "input-field col s12 l6">

               <i class = "material-icons prefix">lock</i>
               <input type = "password" id = "password_2" class = "validate"/>
               <label for = "password_2">Retype Password</label>

             </div>

           </div>

           <div class = "row">
              <!--EMAIL-->
             <div class = "input-field col s12 l6">

               <i class = "material-icons prefix">mail_outline</i>
               <input type = "email" id = "email" class = "validate"/>
               <label for = "email">Email</label>

             </div>
             <!--PHONE-->
             <div class = "input-field col s12 l6">

               <i class = "material-icons prefix">phone</i>
               <input type = "tel" id = "phone" class = "validate" data-length="10"/>
               <label for = "phone">Phone</label>

             </div>

           </div>


           <div class = "row red-text text-darken-2 center">

             <span id = "registration_err_msg"></span>

           </div>



         </div>

         <div class = "card-action">

           <div class = "row hide-on-med-and-down">

             <div class = "col s4 l4 hide" id="go_back">

                <a class = "btn waves-effect waves-light red white-text text-darken-2" href="index.php" ><i class = "material-icons left">arrow_back</i>LOGIN</a>

             </div>

             <div class = "col s4 offset-s6 l4 offset-l4">

               <button class = "btn waves-effect waves-light  white-text text-darken-2 submit_button" id="register_btn" onClick = "validate_registration()" ><i class = "material-icons right">send</i>SIGN UP</button>

             </div>

            </div>

            <div class = "row hide-on-med-and-up">

              <div class = "row">

                <div class = "col s12 hide" id = "go_back_m">

                  <a class = "btn waves-effect waves-light red white-text text-darken-2" href = "index.php">LOGIN</a>

                </div>

              </div>

              <div class = "row">

                <div class = "col s12" id = "register_btn_m">

                  <button class = "btn waves-effect waves-light red white-text text-darken-2" onClick="validate_registration()">SIGN UP</button>

                </div>

              </div>

            </div>

         </div>

       </div>

     </div>

   </div>

  <!-- REGISTRATION FORM ENDS HERE -->



</div>
<!--modal 2 -->
<div id="modal2" class="modal">
  <div class="modal-content">
    <h4>About Us</h4>
    <p>
      Resume builder is an online portal for building resume on the go using simple forms.
      It offers many easy to use features that are free to use.
    </p>
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


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
