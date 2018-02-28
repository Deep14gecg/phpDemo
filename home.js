$(document).ready(function(){

      $.ajax({
        type : 'POST',
        url : 'home.php',
        async : false,
        success: function(msg){

            $("#data").html(msg);

        }
      });
});
