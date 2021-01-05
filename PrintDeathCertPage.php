

<?php
session_start();
error_reporting(0);
include('dbcon.php');


if (!isset($_SESSION['email']))
{

  echo "<script type = \"text/javascript\">
  window.location = (\"index.php\");
  </script>";

}

if(isset($_GET['deathRegId']))
{

$_SESSION['deathRegId'] = $_GET['deathRegId'];

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
  

  <script type="text/javascript">

function Print()
{
window.print();
}
</script>


</head>

<body >
  <div class="container-scroller">


</div>
    <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      

      
      <!-- partial -->
        <div class="content-wrapper" >
          <div class="row purchace-popup">
            <div class="col-12">
             
            </div>
          </div>
          <?php
		  $query = mysqli_query("select  * from tbldeath where deathId = '$_SESSION[deathRegId]'") or die(mysqli_error());
          $row = mysqli_fetch_array($query);

        ?>



          <div class="row" style="margin-top:0px"  >
            <div class="col-lg-7 grid-margin stretch-card">
           
            </div>
         
          </div>
         
          <div class="col-12 grid-margin" >
              <div class="card" >
                <div class="card-body" >
                <div class="card-title" style="margin-left:520px"><img src="coatofarms.png" width="200px" height="150px"></div>
                <div class="card-title" style="margin-left:520px">FEDERAL REPUBLIC OF NIGERIA</div>
                <div class="card-title" style="margin-left:460px"><h4>NATIONAL POPULATION COMMISSION<h4></div><br>
                <div class="card-title" style="margin-left:520px"><u><h4>CERTIFICATE OF DEATH</h4></u></div>
                  <form class="form-sample" method="post" action="BirthRegistration.php">
                    <p class="card-description">
                    <div style="margin-left:100px"><h6>  Issued under the Births and Deaths (Compulsory Registration) Decree 1979</h6><br>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Registration Centre</label>
                          <div class="col-sm-9">
                          <u><?php echo $row['regCentre'];?></u>
              
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Certificate Number:</label>
                          <div class="col-sm-9">
                          <u><?php echo $row['certNo'];?></u>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Town/Village</label>
                          <div class="col-sm-9">
                          <u><?php echo $row['state'];?></u>
                          
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                        
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">LGA</label>
                          <div class="col-sm-9">
                          <u> <?php echo $row['lga'];?></u>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Volume  Year  Entry No</label>
                          <div class="col-sm-9">
                         <u><?php echo $row['certNo'];?></u>  <u><?php echo date('Y')?></u>   <u><?php echo $row['certNo'];?></u>  
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                          <u> <?php echo $row['state'];?></u>
                          </div>
                        </div>
                      </div>
                    <p class="card-description">
                    <div style="margin-left:5px"><h6>This is to certify that the death details of which are recorded herein, has been registered on <u> <?php echo $row['dateReg'];?></u> at this Registration Centre</h6><br>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Genotype</label>
                          <div class="col-sm-9">
                            <select class="form-control" required name="genotype">
                              <option value="AA" >AA</option>
                              <option value="AS">AS</option>
                              <option value="SS">SS</option>
                            </select>
                          </div>
                        </div> -->
                      </div>
                      
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Weight</label>
                          <div class="col-sm-9">
                            <input class="form-control" required name="weight" type="text" />
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <!-- <p class="card-description">
                      Address
                    </p> -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">1. Full Name</label>
                          <div class="col-sm-9">
                          <u> <?php echo $row['lastName'].' '.$row['firstName'];?></u>                          
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" name = "state" required class="form-control" />
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">2. Sex</label>
                          <div class="col-sm-9">
                          <u> <?php echo $row['gender'];?></u>  
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">3. Date Of Death</label>
                          <div class="col-sm-9">
                          <u><?php echo $row['dateOfDeath'];?></u>                            
                              </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">4. Place of Death</label>
                          <div class="col-sm-9">
                          <u> <?php echo $row['placeOfDeath'];?></u>                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Registration Centre</label>
                          <div class="col-sm-9">
                          <input type="text" name="regCentre" required class="form-control" />
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">5. Town/Village:</label>
                          <div class="col-sm-9">
                          <u><?php echo $row['fathersName'];?></u>                          
                            </div>
                        </div> -->
                      </div>
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Registration Centre</label>
                          <div class="col-sm-9">
                          <input type="text" name="regCentre" required class="form-control" />
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">5. Full Address of Usual Place Of Residence of Deceased:</label>
                          <div class="col-sm-9">
                          <u><?php echo $row['address'];?></u>                           
                           </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Registration Centre</label>
                          <div class="col-sm-9">
                          <input type="text" name="regCentre" required class="form-control" />
                          </div>
                        </div> -->
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Place of Issue:</label>
                          <div class="col-sm-9">
                          <u> <?php echo $row['PlaceOfIssue'];?></u>                    
                                  </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Name Of Registration Officer:</label>
                          <div class="col-sm-9">
                          <u> <?php echo $_SESSION['username'];?></u>                      
                                </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date Registered:</label>
                          <div class="col-sm-9">
                          <u> <?php echo $row['dateReg'];?></u>                          
                            </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Signature Of Registration Officer:</label>
                          _______________________________
                          <div class="col-sm-9">
                          <u> </u>                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style="margin-right:100px">
                    <input type ="Submit" onclick='Print()' class="btn btn-success btn-fw" name="Submit"  Value = "Print">
                       <a href="PrintBirthCert.php" class="btn btn-light">Back</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
       
         
           


          <?php include_once('footer.php');?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>