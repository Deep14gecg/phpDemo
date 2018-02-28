<?php

session_start();
 $email = $_SESSION['email'];
$mail = "";
$fname = "";
$lname = "";
$addr = "";
$city = "";
$state = "";
$country = "";
$zip = 0;
$phone = 0;
$image;
 $con = mysqli_connect("localhost","root","deep","resume_signup");
 if (mysqli_connect_errno()) {
   echo "error";
 }
 $result = mysqli_query($con,"SELECT * from personal_data where email='$email'");
 if (mysqli_num_rows($result)>0) {
   while ($row = mysqli_fetch_assoc($result)) {
     $fname = $row['fname'];
     $lname = $row['lname'];
     $addr = $row['address'];
     $city = $row['city'];
     $state = $row['state'];
     $country = $row['country'];
     $zip = $row['zip'];
     $phone = $row['phone'];
     $image = $row['pic'];
 }
 echo "<br>
 <div class='panel panel-primary'>
<div class='panel-heading'>
 <h3 class='panel-title'>Name</h3>
</div>
<div class='panel-body'>
 $fname $lname
</div>
</div>
<div class='panel panel-primary'>
<div class='panel-heading'>
<h3 class='panel-title'>Address</h3>
</div>
<div class='panel-body'>
$addr, $city, $zip, $state,$country
</div>
</div>
<div class='panel panel-primary'>
<div class='panel-heading'>
<h3 class='panel-title'>Phone</h3>
</div>
<div class='panel-body'>
$phone
</div>
</div>
<div class='panel panel-primary'>
<div class='panel-heading'>
<h3 class='panel-title'>Email</h3>
</div>
<div class='panel-body'>
$email
</div>
</div>";
}
 ?>
