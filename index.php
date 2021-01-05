
<?php

error_reporting(0);
include('dbcon.php');
session_start();

if(isset($_POST['login']))
{

$email=$_POST['email'];
$password=$_POST['password'];

	$result = mysqli_query($con,"SELECT * FROM tbladmin WHERE email = '$email' AND password = '$password'") or die(mysqli_error());
							
		$row = mysqli_fetch_array($result);
		$numberOfRows = mysqli_num_rows($result);				
		 if ($numberOfRows > 0) 
     {
              $_SESSION['email'] = $row['email'];
              $_SESSION['username'] = $row['username'];
              $_SESSION['role'] = $row['role'];
              $_SESSION['RegCentre'] = $row['RegCentre'];


          echo "<script type = \"text/javascript\">
                alert(\"Login Successful.................\");
                window.location = (\"AdminDashboard.php\")
                </script>";
                                } 
              else 
                 {

                  echo "<script>alert('Invalid Login Credentials');</script>";
                            
                  }																
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include_once('title.php');?>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body style="background-color:GreenYellow;">
<center><h2><blink>BIRTH AND DEATH REGISTRATION MANAGEMENT SYSTEM</blink></h2></center>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page" >
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one" >
        <div class="row w-100" >
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="index.php" method="post">
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" name="email" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" name = "password" class="form-control" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" name="login">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                </div>
                 <!-- <div class="form-group">
                  <button class="btn btn-block g-login">
                     <img class="mr-3" src="images/file-icons/icon-google.svg" alt="">Log in with Google</button> 
                </div>  -->
                <div class="text-block text-center my-3">
                  <!-- <span class="text-small font-weight-semibold">Not a member ?</span>
                  <a href="register.html" class="text-black text-small">Create new account</a> -->
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">Birth and Death Registration System</a>. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
</body>

</html>