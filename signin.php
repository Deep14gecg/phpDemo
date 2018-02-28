<?php
 if (isset($_POST['login'])) {
   $remember = $_POST['remember'];
   $con = mysqli_connect("localhost","root","deep","resume_signup");
   if (mysqli_connect_errno()) {
     echo "error";
   }
   if (isset($_POST['email']) && isset($_POST['password'])) {
     $email = $_POST['email'];
     $email = mysqli_real_escape_string($con,$email);
     $password =md5(mysqli_real_escape_string($con,$_POST['password'])) ;
   //  $rem = $_POST['remember'];
    $dbmail = "";
     $dbpass = "";

       $result = mysqli_query($con,"SELECT email, password from signup where email='$email'");
       if (mysqli_num_rows($result)>0) {
         while ($row = mysqli_fetch_assoc($result)) {
           $dbpass = $row['password'];
           $dbmail=$row['email'];
       }

     }
         else {
           echo "incorrect email";
            header("location: signIn.html");
         }

          if ( $password != $dbpass) {
             echo "incorrect password";
              header("location: signIn.html");
           }
           else {
             if ($remember != null) {
               setcookie('email',$email,time()+60*60*7);
               setcookie('password',$_POST['password'],time()+60*60*7);
             }
             session_start();
             $_SESSION['email'] = $email;
             header("location: home.html");
            }
       }
     }

 else {
   header("location: signIn.html");
 }
/*$con = mysqli_connect("localhost","root","deep","resume_signup");
if (mysqli_connect_errno()) {
  echo "error";
}




if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con,$email);
  $password =md5(mysqli_real_escape_string($con,$_POST['password'])) ;
//  $rem = $_POST['remember'];
 $dbmail = "";
  $dbpass = "";

    $result = mysqli_query($con,"SELECT email, password from signup where email='$email'");
    if (mysqli_num_rows($result)>0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $dbpass = $row["password"];
    }

     if ($password != $dbpass) {
        echo "incorrect";
      }
      else {
      #  if (isset($_POST['loginbtn'])) {
        #  if ($rem) {
        #    setcookie('email',$email,time()*60*60*7);

        #  }
        #  session_start();
        #  $_SESSION['email'] = $email;
            echo "done";
      #  }

      }
    }
  }
  <?php
    if(isset($_COOKIE['email']) and isset($_COOKIE['password'])){
      $email = $_COOKIE['email'];
      $password = $_COOKIE['password'];
      echo" <script>
        document.getElementByid('inputEmail').value=$email;
        document.getElementByid('password').value=$password;
      </script>";
    }
  ?>



*/

 ?>
