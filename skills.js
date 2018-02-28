$(document).ready(function(){

      $.ajax({
        type : 'POST',
        url : 'skills.php',
        async : false,
        success: function(msg){

            $("#data").html(msg);
        }
      });
});
