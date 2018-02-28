<?php

  $con = mysqli_connect("localhost","root","deep","resume_signup");
  if (mysqli_connect_errno()) {
    echo "error";
  }
  if (isset($_POST['email']) && !isset($_POST['password'])) {
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con,$email);
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      echo "incorrect";
    }
    else {
      $result = mysqli_query($con,"select id from signup where email='$email'");
      if (mysqli_num_rows($result) == 1) {
        echo "exists";
      }
    }
  }

 ?>
