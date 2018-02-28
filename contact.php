<?php
 if (isset($_POST['email']) && isset($_POST['message'])){
   $email = $_POST['email'];
   $msg = $_POST['message'];
   $from = "FROM: 'RESUME CREATOR USER' <$email>";
   $to = 'deep56parmar@hotmail.com';
   $sub = "Mail from RESUME CREATOR";
   mail($to,$sub,$msg,$from);
   echo"Mail has been sent";
 }/*
 $email = $_POST['email'];
 $msg = $_POST['message'];
 $to = "deep56parmar@hotmail.com";
 $sub = "Mail from RESUME CREATOR";
 mail($to,$sub,$msg,$email,$email);
 echo"Mail has been sent";
echo"done";*/
?>
