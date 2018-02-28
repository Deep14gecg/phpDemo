<?php
$con = mysqli_connect("localhost","root","deep","resume_signup");
if (mysqli_connect_errno()) {
  echo "error";
}
if (isset($_POST['email']) && isset($_POST['lname']) && isset($_POST['fname']) && isset($_POST['password'])) {
  $fname = mysqli_real_escape_string($con,$_POST['fname']);
  $lname = mysqli_real_escape_string($con,$_POST['lname']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $password =md5(mysqli_real_escape_string($con,$_POST['password'])) ;
  echo "wowowowowowowow";

  $statement = $con->prepare("INSERT INTO signup (email, fname, lname, password) VALUES(?, ?, ?, ?)");
  $statement->bind_param("ssss", $email, $fname, $lname, $password);
  $statement->execute();
  $statement->close();
  $con->close();


}
 ?>
