$(document).ready(function(){
  var email = "";
  var message = "";
  $("#fname").keyup(function(){

    var value = $(this).val();
    if(value == ""){
      $("#data").html("Please Enter details");
    }
    else
    {
        $("#data").html("");
        message = value;
    }

  });
  $("#inputEmail").keyup(function(){

    var value = $(this).val();
    if(value == ""){
      $("data").html("Please Enter your email");
    }
    else
    {
      $("#data").html("");
      email = value;
    }
  });
  $("#subtn").click(function (){



    if( email == "" || message == "" ){
      $("#data").html("Please fill required details");
    }

 else
  {
      $.ajax({
        type : 'POST',
        url : 'contact.php',
        data : "email="+email+"&message="+message,
        success: function(msg){

            $("#data").html(msg);

        }

      });
   }
  });


});
