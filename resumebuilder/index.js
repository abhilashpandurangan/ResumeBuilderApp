$(document).ready(function(){
  $('.modal').modal();
 });

$(document).ready(function(){
$('.parallax').parallax();
});

function login()
{
  var email = $("#email").val();
  var pass = $("#password").val();
  var err_flag = 0 ;
  var err_msg = " "; // error msg

  if( pass.length==0 || email.length==0 ){

     err_flag = 1;
     err_msg = "Fields cannot be empty";

  }

  if(err_flag == 1){

    $("#login_err_msg").html(err_msg);

  }

  else{

    //login starts
    err_msg="";
    $("#login_err_msg").html(err_msg);
    var formdata ={
      'password': pass,
      'email': email
    }

    $.ajax({

      type : "POST",
      url : "login_check.php",
      data : formdata,
      success : function(data){

        if (data==1){
         window.location.href='login/user.php';
        }

        else if(data == 0){

          err_msg="Email or Password entered is incorrect!!";
          $("#login_err_msg").html(err_msg);

        }

      }

    });

  }


}
