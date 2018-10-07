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
            text-align: center;
          }
          .page_container{
          min-height : 80 vh;
          }
        </style>
        <!--link to js file -->
        <script type="text/javascript" src="index.js"></script>

        <title>Resume Builder</title>

  </head>

  <body>

    <!--nav bar -->
    <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper  amber darken-2">
        <a href="#" class="brand-logo hide-on-med-and-down">
        <i class="material-icons">web</i>Resume Builder</a>
        <ul class="right hide-on-down">
          <li><a href="#modal1" class="modal-trigger">Login</a></li>
          <li><a href="signup.php" class="modal-trigger">Sign Up</a></li>
          <li><a href="#modal2" class="modal-trigger">About Us</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <!--nav over -->
  <!-- Modal1 Structure -->
  <div id="modal1" class="modal">
   <div class="modal-content container">
     <div class="row registration_title"><h4>Login</h4> </div>
     <div class="col s12">
      <div class="row">
        <div class="input-field col s10">
          <i class = "material-icons prefix">mail_outline</i>
          <input type = "email" id = "email" class = "validate"/>
          <label for = "email">Email</label>
        </div>
     </div>
     <div class="row">
       <div class="input-field col s10">
         <i class="material-icons prefix">lock</i>
         <input id = "password" type="password" class="validate">
         <label for="password">Password</label>
       </div>
    </div>
    <div class = "row red-text text-darken-2 center">

      <span id = "login_err_msg"></span>

    </div>
    <br/>
    <div class="row">
      <div class="offset-s2 col s3">
      <button class="btn waves-effect waves-light" type="submit"  onClick="login()">Login
     </button>
     </div>
   </div>

  </div>
  </div>
</div>
<div id="modal2" class="modal">
  <div class="modal-content">
    <h4>About Us</h4>
    <p>
      Resume builder is an online portal for building resume on the go using simple forms.
      It offers many easy to use features that are free to use.Developed by Abhilash.P
    </p>
  </div>
</div>

<!--modal over -->
<div class="parallax-container">
      <div class="parallax"><img src="images/resume.jpg">

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
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
