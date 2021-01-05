
<?php
error_reporting(0);
session_start(); 
?>
  
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="coatofarms.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">
                    <?php if (isset($_SESSION['username']))
                  { 
                     echo 'User: ' .$_SESSION['username'];          
                    
                    } 

                    ?>
                </p>
                  <div>
                    <small class="designation text-muted">
                      
                    <?php if (isset($_SESSION['role']))
                  { 
                     echo 'Role: ' .$_SESSION['role']; 
                    
                    } 

                    ?>


                    </small>
                    
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <a href="UsersRegistration.php" class="btn btn-success btn-block">New Users
                <i class="mdi mdi-plus"></i>
              </a>
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AdminDashboard.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Registration</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="BirthRegistration.php">Birth Registration</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="DeathRegistration.php">Death Registration</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="centreRegistration.php">Centre Registration</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">

              <li class="nav-item">
                  <a class="nav-link" href="BirthReports.php"> Birth Reports </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="DeathReports.php"> Death Reports </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="CentreReports.php"> Centre Reports </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="UsersReports.php"> Users Reports </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Population Density </a>
                </li> -->


                
              
                <!-- <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li> -->
              </ul>
            </div>
          </li>
        


          <li class="nav-item">
            <a class="nav-link" href="PrintBirthCert.php">
            <i class="menu-icon mdi mdi-receipt"></i>
              <span class="menu-title"> Birth Certificates</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="PrintDeathCert.php">
            <i class="menu-icon mdi mdi-receipt"></i>
              <span class="menu-title"> Death Certificates</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
            <i class="menu-icon mdi mdi-backup-restore"></i>
            <span class="menu-title">Change Password</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Sign Out</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li> -->
         
        </ul>
      </nav>