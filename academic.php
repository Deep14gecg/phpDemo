<?php
session_start();
   $email = $_SESSION['email'];
   $primary = "";
   $secondary = "";
   $higherSecondary="";
   $graduation = "";
   $postGraduation = "";
$con = mysqli_connect("localhost","root","deep","resume_signup");
if (mysqli_connect_errno()) {
  echo "error";
}
$result = mysqli_query($con,"SELECT * from academic where email='$email'");
if (mysqli_num_rows($result)>0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $mail = $row['email'];
    $primary = $row['prim'];
    $secondary = $row['secondary'];
    $higherSecondary=$row['highersec'];
    $graduation = $row['grad'];
    $postGraduation = $row['postgrad'];
    }
    echo "
    <div class='row placeholders'>
          <div class='timeline'>
            <ul>
              <li>
                <div>
                 <h3>Primary Education</h3>$primary
                </div>
              </li>
              <li>
                <div>
                  <h3 >Secondary Educatiom</h3 > $secondary
                </div>
              </li>
              <li>
                <div>
                  <h3 >Higher Secondary Education</h3 > $higherSecondary
                </div>
              </li>
              <li>
                <div>
                  <h3 >Graduation </h3 > $graduation
                </div>
              </li>
              <li>
                <div>
                  <h3 >Post Graduation </h3 > $postGraduation
                </div>
              </li>
            </ul>
          </div>
        </div>
     ";
  }
 ?>
<!-- <div class='row placeholders'>
      <div class='timeline'>
        <ul>
          <li>
            <div>
             $primary
            </div>
          </li>
          <li>
            <div>
              <h3 >Secondary Educatiom</time > $secondary
            </div>
          </li>
          <li>
            <div>
              <time >Higher Secondary Education</time > $higherSecondary
            </div>
          </li>
          <li>
            <div>
              <time >Graduation </time > $graduation
            </div>
          </li>
          <li>
            <div>
              <time >Post Graduation </time > $postGraduation
            </div>
          </li>
        </ul>
      </div>
    </div> */
-->
