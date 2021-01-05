<div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                    <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right"> Birth Registrations</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">     

                    <?php
              $result = mysqli_query($con,"SELECT * FROM tblbirth") or die(mysqli_error());
              $row = mysqli_fetch_array($result);
              $numberOfRows = mysqli_num_rows($result);	
              echo $numberOfRows;
                      ?>

                        </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> All Birth Registration
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                    <i class="mdi mdi-poll-box text-success icon-lg"></i>                 
                     </div>
                    <div class="float-right">
                      <p class="mb-0 text-right"> Death Registrations</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">


                        <?php
              $result = mysqli_query($con,"SELECT * FROM tbldeath") or die(mysqli_error());
              $row = mysqli_fetch_array($result);
              $numberOfRows = mysqli_num_rows($result);	
              echo $numberOfRows;
                      ?>

                        </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> All Death Registrations
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                    <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Centres</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">


                        <?php
              $result = mysqli_query($con,"SELECT * FROM tblcentre") or die(mysqli_error());
              $row = mysqli_fetch_array($result);
              $numberOfRows = mysqli_num_rows($result);	
              echo $numberOfRows;
                      ?>

                        </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> All Available Centre
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">System Users</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">

                        <?php
              $result = mysqli_query($con,"SELECT * FROM tbladmin") or die(mysqli_error());
              $row = mysqli_fetch_array($result);
              $numberOfRows = mysqli_num_rows($result);	
              echo $numberOfRows;
                      ?>

                        </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> All System Users
                  </p>
                </div>
              </div>
            </div>
          </div>