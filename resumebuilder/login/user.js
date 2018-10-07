$(document).ready(function(){
  $('.modal').modal();
 });

$(document).ready(function(){
$('.parallax').parallax();
});

//console.log(em);
function contact_submit()
{
  var fname = $("#f_name").val();
  var lname = $("#l_name").val();
  var phone = $("#phone").val();
  var email = $("#email").val();
  var address = $("#address").val();
  if(fname.length == 0 || lname.length == 0 || phone.length == 0 || email.length == 0 || address.length == 0)
     { alert('Fields should not be empty');
      }
  else{

    var formdata = {
      'fname': fname,
      'lname': lname,
      'phone': phone,
      'email': email,
      'address': address
    }

    $.ajax({

      type : "POST",
      url : "contact_insert.php",
      data : formdata,
      success : function(data){
      alert('Contact Information Updated!');
      $("#f_name").val('');
      $("#l_name").val('');
      $("#phone").val('');
      $("#email").val('');
      $("#address").val('');
      $('ul.tabs').tabs('select_tab', 'test2');

      }
    });

  }
}
function education1_submit() {

  var inst = $("#inst_1").val();
  var degree = $("#degree_1").val();
  var datefrom = $("#datefrom1").val();
  var dateto = $("#dateto1").val();
  var details = $("#details_1").val();
  if(inst.length == 0 || degree.length == 0 || datefrom.length == 0 || dateto.length == 0 || details.length == 0)
     { alert('Fields should not be empty');
      }
  else{
    var formdata = {
      'inst': inst,
      'degree': degree,
      'datefrom': datefrom,
      'dateto': dateto,
      'details': details,
      'email' : em
    }

    $.ajax({

      type : "POST",
      url : "education1_insert.php",
      data : formdata,
      success : function(data){
      alert('Education Details Updated!');
      $("#inst_1").val('');
      $("#degree_1").val('');
      $("#datefrom1").val('');
      $("#dateto1").val('');
      $("#details_1").val('');
      $("#first_edu").addClass('hide');
      }
    });


  }

}

function education2_submit() {

  var inst = $("#inst_2").val();
  var degree = $("#degree_2").val();
  var datefrom = $("#datefrom2").val();
  var dateto = $("#dateto2").val();
  var details = $("#details_2").val();
  if(inst.length == 0 || degree.length == 0 || datefrom.length == 0 || dateto.length == 0 || details.length == 0)
     { alert('Fields should not be empty');
      }
  else{
    var formdata = {
      'inst': inst,
      'degree': degree,
      'datefrom': datefrom,
      'dateto': dateto,
      'details': details,
      'email' : em
    }

    $.ajax({

      type : "POST",
      url : "education2_insert.php",
      data : formdata,
      success : function(data){
      alert('Education Details Updated!');
      $("#inst_2").val('');
      $("#degree_2").val('');
      $("#datefrom2").val('');
      $("#dateto2").val('');
      $("#details_2").val('');
      $('ul.tabs').tabs('select_tab', 'test3');
      }
    });


  }

}
function exp1_submit() {

  var comp = $("#comp1").val();
  var desig = $("#desig1").val();
  var datef = $("#datef1").val();
  var datet = $("#datet1").val();
  var details = $("#dt1").val();
  if(comp.length == 0 || desig.length == 0 || datef.length == 0 || datet.length == 0 || details.length == 0)
     { alert('Fields should not be empty');
      }
  else{
    var formdata = {
      'comp' : comp,
      'desig' : desig,
      'datef' : datef,
      'datet' : datet,
      'details': details,
      'email' : em
    }

    $.ajax({

      type : "POST",
      url : "exp1_insert.php",
      data : formdata,
      success : function(data){
      alert('Experience Details Updated!');
      $("#comp1").val('');
      $("#desig1").val('');
      $("#datef1").val('');
      $("#datet1").val('');
      $("#dt1").val('');
      $("#exp1").addClass('hide');
      }
    });


  }

}
function exp2_submit() {

  var comp = $("#comp2").val();
  var desig = $("#desig2").val();
  var datef = $("#datef2").val();
  var datet = $("#datet2").val();
  var details = $("#dt2").val();
  if(comp.length == 0 || desig.length == 0 || datef.length == 0 || datet.length == 0 || details.length == 0)
     { alert('Fields should not be empty');
      }
  else{
    var formdata = {
      'comp' : comp,
      'desig' : desig,
      'datef' : datef,
      'datet' : datet,
      'details': details,
      'email' : em
    }

    $.ajax({

      type : "POST",
      url : "exp2_insert.php",
      data : formdata,
      success : function(data){
          alert('Experience Details Updated!');
          $("#comp2").val('');
          $("#desig2").val('');
          $("#datef2").val('');
          $("#datet2").val('');
          $("#dt2").val('');
          $('ul.tabs').tabs('select_tab', 'test4');
        }
    });


  }

}
function skills_submit() {

  var skills = $("#skills").val();
  var hb = $("#hb").val();
  var ec = $("#ec").val();
  if(skills.length == 0 || hb.length == 0 || ec.length == 0)
     { alert('Fields should not be empty');
      }
  else{
    var formdata = {
    'skills': skills,
    'hb': hb,
    'ec': ec,
    'email' : em
    }

    $.ajax({

      type : "POST",
      url : "skills_insert.php",
      data : formdata,
      success : function(data){
      alert('Skills Details Updated!');
      $("#skills").val('');
      $("#hb").val('');
      $("#ec").val('');
      $('#sub').addClass('hide');
      $('#resume').removeClass('hide');

      }
    });


  }

}
