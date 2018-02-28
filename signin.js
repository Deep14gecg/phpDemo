$(document).ready(function(){
  var email = "";
  var password = "";
  var loginbtn;
//  var remember = ($("#rem").is(':checked'))?1:0;
  $("#inputEmail").keyup(function(){
    var value = $(this).val();
    if(value == ""){
      $("#error").html("Please Enter Email Id");
    }
    else{
        $("#error").html("");
      email = value;
    }
  });

  $("#inputPassword").keyup(function(){
    var value = $(this).val();
    if(value == ""){
      $("#error").html("Please Enter password");
    }
    else{
        $("#error").html("");
      password = value;
    }

  });
$("#lgbtn").click(function(){

var value = $(this).val();
//loginbtn = value;
  if(email == "" || password == ""){
    $("#error").html("Please Enter Email and password");
  }

  else{

    $.ajax({
      type : 'POST',
      url : 'signin.php',
      data : "email="+email+"&password="+password+"&loginbtn="+loginbtn+"&remember="+remember,
      success: function(msg){

        if(msg == "incorrect"){
          $("#error").html("incorrect Email or password");
        }
        else if (msg == "done") {
          window.location.href="home.html";
        }
        else if(msg == "error"){
          $("#error").html("technical error");
        } 
        $("#error").html("technical error");



      }
    });

  }

});




});
