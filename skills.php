<?php
session_start();
   $email = $_SESSION['email'];
$mail = "";
$Communication = 0;
$Multitasking = 0;
$Technical = 0;
$Problem = 0;
$Time = 0;
$Critical = 0;
$Teamwork = 0;
$Computer = 0;
$Creativity = 0;
$con = mysqli_connect("localhost","root","deep","resume_signup");
if (mysqli_connect_errno()) {
  echo "error";
}
$result = mysqli_query($con,"SELECT * from skills where email='$email'");
if (mysqli_num_rows($result)>0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $mail = $row['email'];
    $Communication = $row['communication'];
    $Multitasking = $row['multitasking'];
    $Technical = $row['technical'];
    $Problem = $row['problem'];
    $Time = $row['time'];
    $Critical = $row['critical'];
    $Teamwork = $row['team'];
    $Computer = $row['comp'];
    $Creativity = $row['creativity'];
    }
    echo "
    <h3>Communication</h3>
    <div class='progress'>
      <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: $Communication%;'>
        $Communication%
      </div>
    </div>
    <h3>Multitasking</h3>
    <div class='progress'>
      <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: $Multitasking%;'>
        $Multitasking%
      </div>
    </div>
    <h3>Technical skills</h3>
    <div class='progress'>
      <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: $Technical%;'>
        $Technical%
      </div>
    </div>
    <h3>Problem Solving</h3>
    <div class='progress'>
      <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: $Problem%;'>
        $Problem%
      </div>
    </div>
    <h3>Time Management</h3>
    <div class='progress'>
      <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: $Time%;'>
        $Time%
      </div>
    </div>
    <h3>Critical Thinking</h3>
    <div class='progress'>
      <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: $Critical%;'>
        $Critical%
      </div>
    </div>
    <h3>Team Work</h3>
    <div class='progress'>
      <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: $Teamwork%;'>
        $Teamwork%
      </div>
    </div>
    <h3>Computer skills</h3>
    <div class='progress'>
      <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: $Computer%;'>
        $Computer%
      </div>
    </div>
    <h3>Creativity</h3>
    <div class='progress'>
      <div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: $Creativity%;'>
        $Creativity%
      </div>
    </div>
     ";
  }
 ?>
