$(document).ready(function(){
  $('.modal').modal();
 });
 $(document).ready(function() {

   $('select').material_select();

 });
 function validate_registration(){

   // to validate
   var name = $("#name").val();
   var gender = $("#gender").val();
   var password_1 = $("#password_1").val();
   var password_2 = $("#password_2").val();
   var email = $("#email").val();
   var phone = $("#phone").val();

   var err_flag = 0 ;
   var err_msg = " "; // error msg

   if(name.length == 0 || gender.length==0 || password_1.length==0 || password_2.length==0 || email.length==0 || phone.length==0 ){

     err_flag = 1;
    	err_msg = "Fields cannot be empty";

   }
   else if (password_1.length<8){

      err_flag=1;
      err_msg="Password should be atleast 8 characters long!";

  	}

   else if ( password_1 != password_2 ) {

     err_flag = 1;
  	 	err_msg = "Password does not match with confirm password";

   }
   else if (isNaN(phone)) {
     err_flag = 1;
  	 	err_msg = "Phone number is invalid";
   }

   if(err_flag == 1){

     $("#registration_err_msg").html(err_msg);

   }

   else{

     //register starts
     err_msg="";
     $("#registration_err_msg").html(err_msg);
     $("#register_btn").hide();
     $("#register_btn_m").hide();
     var formdata ={
       'name': name,
       'gender': gender,
       'password': password_1,
       'email': email,
       'phone': phone
     }

     $.ajax({

       type : "POST",
       url : "signup_insert.php",
       data : formdata,
       success : function(data){

         if (data==0){

           $(".progress ").hide();
           err_msg="Registeration done!!";

           $("#registration_err_msg").html(err_msg);
           $("#go_back").removeClass('hide');
           $("#go_back_m").removeClass('hide');

         }

         else if(data == 1){

           err_msg="Email ID already exists!!";
       		$("#registration_err_msg").html(err_msg);
           $("#register_btn").show();

         }

       }

     });

   }

 }
