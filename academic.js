$(document).ready(function(){

      $.ajax({
        type : 'POST',
        url : 'academic.php',
        async : false,
        success: function(msg){
            $("#data").html(msg);

        }
      });


});
