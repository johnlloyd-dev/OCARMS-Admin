<?php
   session_start(); 
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Monetory Campaings Page</title>

      <link href="images/favicon.ico" rel="icon">

      <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
      <link href="css/sweetalert.css" rel="stylesheet">
      <link href="css/min.css?v=<?=date('s');?>" rel="stylesheet">
      <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <div id="wrapper">
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a style="border-right: solid;" class="sidebar-brand bg-gradient-light border d-flex align-items-center justify-content-center" href="dashboard.php">
            <div class="sidebar-brand-icon">
               <img src="images/DSWD-LOGO 2.png">
            </div>
         </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
               <a class="nav-link" href="dashboard.php">
               <i class="fas fa-fw fa-spin fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="list_of_clients.php">
               <i class="fas fa-fw fa-hand-holding-usd"></i>
               <span>Registered Clients</span></a>
         </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
               Menu 
            </div>
            <li class="nav-item active">
            <a class="nav-link" href="campaign_monetory.php">
               <i class="fas fa-fw fa-money-bill-alt"></i>
               <span>Fundraises</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="volunteer_activities.php">
               <i class="fas fa-fw fa-person-carry"></i>
               <span>Activities</span></a>
         </li>
            <li class="nav-item">
               <a class="nav-link" href="requests.php">
               <i class="fas fa-fw fa-hand-holding-usd"></i>
               <span>Requests</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="bulletin.php">
               <i class="fas fa-fw fa-newspaper"></i>
                  <span>Bulletin</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="logs.php">
               <i class="fas fa-fw fa-history"></i>
                  <span>Logs</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <div class="sidebar-card">
               <div id="dateTime" style="text-align: center; font-size: 15px">
                  <hr style="margin:0 0 15px 0">
                  <p id="dateValue" style="margin: 0"></p>
                  <p id="timeValue" style="margin: 0"></p>
               </div>
            </div>
         </ul>
         <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
               <?php include('includes/header.php') ?>
               <div class="container-fluid">
                  <div class="card shadow mb-4">
                     <div class="card-header py-3">
                        <h3 class="m-0 text-primary">Monetory Campaigns</h3>
                     </div>
                     <div class="card-body">
                     <span>
                        <a href="#addNewFundraise" data-toggle="modal" class="btn btn-circle btn-primary" data-tooltip data-placement="bottom" title="Add Fundraise">
                           <span class="icon">
                              <i class="fas fa-plus"></i>
                           </span>
                        </a>
                     </span>
                     <?php include('includes/monetary_campaign/add_fundraise.php'); ?>
                           <hr>
                     <div class="row mt-3">
                     <?php
                     include('includes/connect.php');
                              $view=mysqli_query($conn,"SELECT * FROM campaigns_monetary ORDER BY fundraise_id DESC");
                              while($row=mysqli_fetch_array($view)){
                               ?>
                           <div class="col-lg-4">
                              <!-- Overflow Hidden -->
                              <div class="card-sm mb-4 border-left-primary">
                                 <div class="card-header py-3">
                                    <h6 class="m-0 text-danger"><?php echo $row["fundraise_title"]; ?></h6>
                                 </div>
                                 <div class="text-center">
                                    <img class="card-img-top p-3" style="height: 200px; width: 95%; object-fit:cover;" src="includes/monetary_campaign/image_view.php?fundraise_id=<?php echo $row["fundraise_id"]; ?>">
                                 </div>
                                 <hr style="width: 85%;" class="mb-0">
                                 <div class="card-body text-primary">
                                    <div class="row card-semi mb-2">
                                       <div class="col-lg card-final">
                                          <a class="final collapsed" data-toggle="collapse" href="#collapseAC<?php echo $row["fundraise_id"]; ?>" role="button" aria-expanded="false" aria-controls="collapseAC<?php echo $row["fundraise_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-sm fa-info"></i>
                                          <span class="font-weight-bold"> About Campaign</span>
                                          </a>
                                       </div>
                                    </div>
                                       <div class="collapse mb-2 w-100" id="collapseAC<?php echo $row["fundraise_id"]; ?>">
                                          <div class="card card-body-sm border border-primary">
                                             <div style="font-size: small" class="text-danger text-justify"><?php echo $row['fundraise_description']; ?></div> 
                                          </div>
                                       </div>
                                    <div class="row card-semi mb-2">
                                       <div class="col-lg card-final">
                                          <a class="final collapsed" data-toggle="collapse" href="#collapseTA<?php echo $row["fundraise_id"]; ?>" role="button" aria-expanded="false" aria-controls="collapseTA<?php echo $row["fundraise_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-sm fa-dollar-sign"></i>
                                          <span class="font-weight-bold"> Target Amount</span>
                                          </a>
                                       </div>
                                    </div>
                                       <div class="collapse mb-3 w-100" id="collapseTA<?php echo $row["fundraise_id"]; ?>">
                                          <div class="card card-body-sm border border-primary">
                                             <div style="font-size: small" class="text-danger"><?php echo $row["fundraise_target_amount"]; ?></div> 
                                          </div>
                                       </div>
                                    <div class="row card-semi mb-2">
                                       <!-- <div class="col-lg-10 font-weight-bold"></div> -->
                                       <div class="col-lg card-final">
                                          <a class="final collapsed" data-toggle="collapse" href="#collapseTD<?php echo $row["fundraise_id"]; ?>" role="button" aria-expanded="false" aria-controls="collapseTD<?php echo $row["fundraise_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-sm fa-calendar-alt"></i>
                                          <span class="font-weight-bold"> Target Days</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="collapse mb-3 w-100" id="collapseTD<?php echo $row["fundraise_id"]; ?>">
                                       <div class="card card-body-sm border border-primary">
                                          <div style="font-size: small" class="text-danger"><?php echo $row["fundraise_target_days"]; ?></div> 
                                       </div>
                                    </div>
                                    <div class="row card-semi mb-2">
                                       <!-- <div class="col-lg-10 font-weight-bold"></div> -->
                                       <div class="col-lg card-final">
                                          <a class="final collapsed" data-toggle="collapse" href="#collapseSC<?php echo $row["fundraise_id"]; ?>" role="button" aria-expanded="false" aria-controls="collapseSC<?php echo $row["fundraise_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-sm fa-heart"></i>
                                          <span class="font-weight-bold"> Supported Causes</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="collapse mb-3 w-100" id="collapseSC<?php echo $row["fundraise_id"]; ?>">
                                       <div class="card card-body-sm border border-primary">
                                          <div style="font-size: small" class="text-danger"><?php echo $row["fundraise_sprtd_cs"]; ?></div> 
                                       </div>
                                    </div>
                                    <div class="row card-semi mb-2">
                                       <!-- <div class="col-lg-10 font-weight-bold"></div> -->
                                       <div class="col-lg card-final">
                                          <a class="final collapsed" data-toggle="collapse" href="#collapsePAR<?php echo $row["fundraise_id"]; ?>" role="button" aria-expanded="false" aria-controls="collapsePAR<?php echo $row["fundraise_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-sm fa-hand-holding-usd"></i>
                                          <span class="font-weight-bold"> Partial Amount Raised</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="collapse mb-3 w-100" id="collapsePAR<?php echo $row["fundraise_id"]; ?>">
                                       <div class="card card-body-sm border border-primary">
                                          <div style="font-size: small" class="text-danger">5, 000</div> 
                                       </div>
                                    </div>
                                    <div class="text-center card-footer pt-2">
                                       <a href="fundraise_donors_table.php?fundraiseID=<?php echo $row['fundraise_id']; ?>" class="btn btn-outline-primary btn-circle" data-tooltip data-placement="bottom" title="List of Donors of this Fundraise"><i class="fas fa-person-carry"></i></a>
                                       <a href="#update<?php echo $row['fundraise_id']; ?>" data-toggle="modal" class="btn btn-outline-warning btn-circle" data-tooltip data-placement="bottom" title="Update Fundraise"><i class="fas fa-edit"></i></a>
                                       <a href="#delete<?php echo $row['fundraise_id']; ?>" data-toggle="modal" class="btn btn-outline-danger btn-circle" data-tooltip data-placement="bottom" title="Delete Fundraise"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                              <?php include('includes/monetary_campaign/update_fundraise.php'); ?>
                              <?php include('includes/monetary_campaign/delete_fundraise.php'); ?>
                           <?php } ?>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php
               include('includes/footer.php');
               ?>
         </div>
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      </div>
      <?php
         include('includes/user/logout_modal.php');
         ?>
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      

      <script src="js/sb-admin-2.js"></script>
      <script src="js/moment.js"></script>
      <script src="partial/dateTimeClock.js"></script>
      <script src="js/sweetalert.min.js"></script>

      <script src="js/fundraise_data_actions.js"></script>

   <script type="text/javascript">
    function readURL(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagePreview'+ id +'').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

      <?php 
         if(isset($_SESSION['status']) && $_SESSION['status'] !='')
         {
             ?>
      <script>
         swal({
         title: "<?php echo $_SESSION['status']; ?>",
         text: "<?php echo $_SESSION['text']; ?>",
         icon: "<?php echo $_SESSION['status_code']; ?>",
         button: "Done"
         });
      </script>
      <?php
         unset($_SESSION['status']);
         }
         ?>



   </body>
</html>