$(document).ready(function(){

  var fname = "";
  var lname = "";
  var email = "";
  var password = "";
  var rePassword = "";

  $("#fname").keyup(function(){

    var value = $(this).val();
    if(value == ""){
      $("#fnamer").html("Please Enter your first name:");
    }
    else
    {
        $("#fnamer").html("");
      fname = value;
    }

  });

  $("#lname").keyup(function(){

    var value = $(this).val();
    if(value == ""){
      $("#lnamer").html("Please Enter your last name");
    }
    else
    {
      $("#lnamer").html("");
      lname = value;
    }

  });

  $("#inputEmail").keyup(function(){

    var value = $(this).val();
    if(value == ""){
      $("#emailr").html("Please Enter your email");
    }
    else
    {

      $.ajax({
        type : 'POST',
        url : 'signUp.php',
        data : "email="+value,
        success: function(msg){
          if(msg == "error"){
            $("#emailr").html(msg);
            email = "";
          }

          else if (msg == "incorrect") {
            $("#emailr").html("Invalid Email ID");
            email = "";
          }

          else if (msg == "exists") {
            $("#emailr").html("User already exists");
            email = "";
          }

          else{
              $("#emailr").html("");
            email = value;
          }
        }
      });

    }


  });

  $("#inputPassword").keyup(function(){

    var value = $(this).val();
    if(value == ""){
      $("#passwordr").html("Please Enter your password");
    }

    else if (value.length < 8 ) {

      $("#passwordr").html("Minimum length is 8 characters");

    }
    else if(value.search(/[A-Z]/) < 0){
      $("#passwordr").html("password must contain at least one Uppercase character.");
    }

    else if(value.search(/[0-9]/) < 0){
      $("#passwordr").html("password must contain at least one Number");
    }

    else if (value.search(/[!@#$%^&*.,/~]/) < 0) {
      $("#passwordr").html("password must contain at least one Special character");
    }

    else
    {


      $("#passwordr").html("");
      password = value;
    }

  });

  $("#inputRePassword").keyup(function(){

    var value = $(this).val();
    if(value == ""){
      $("#rePasswordr").html("Please confirm your password");
    }

    else if (value !== password) {

        $("#rePasswordr").html("password doesn't match");

    }

    else if (value === password) {
        $("#rePasswordr").html("password Match");
    }

    else
    {
      rePassword= value;
    }

  });


  $("#subtn").click(function (){



    if(fname == "" || lname == "" || email== "" || password == "" ){
      $("#rePasswordr").html("Please fill required details");
    }

  else
  {


      var formdiv  = $("#form");
      formdiv.html("Hello");
      formdiv.html("<h2>Registered Successfully</h2><br/> <a href='index.html' class='btn btn-lg btn-success btn-block' id='signInbtn'>continue</a>");



      $.ajax({
        type : 'POST',
        url : 'sign.php',
        data : "email="+email+"&fname="+fname+"&lname="+lname+"&password="+password,
        success: function(msg){

            $("#rePasswordr").html(" done");

        }

      });
   }
  });


});


/*
match(^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\S+$).{8,}$)

 <br> <button class='btn btn-lg btn-success btn-block' onclick='location.href='index.html';' id='signInbtn'>continue</button>

 <h2>Registered Successfully</h2><br/> <button class='btn btn-lg btn-success btn-block' onclick='location.href='index.html';' id='signInbtn'>continue</button>
*/
