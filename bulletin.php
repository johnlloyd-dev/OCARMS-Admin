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
      <title>Bulletin Page</title>
      <link href="images/favicon.ico" rel="icon">
      <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
      <link href="css/fonts.googleapis.css" rel="stylesheet">
      <link href="css/sweetalert.css" rel="stylesheet">
      <link href="css/min.css?v=<?=date('s');?>" rel="stylesheet">
      <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <div id="wrapper">
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a style="border-right: solid;"
               class="sidebar-brand bg-gradient-light border d-flex align-items-center justify-content-center"
               href="dashboard.php">
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
            <li class="nav-item">
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
            <li class="nav-item active">
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
               <?php 
                  include('includes/header.php') 
                  ?>
               <div class="container-fluid">
                  <div class="card shadow mb-4">
                     <div class="card-header py-3">
                        <h3 class="m-0 text-primary">Bulletin</h3>
                     </div>
                     <div class="card-body">
                        <span class="pull-left pb-0">
                        <a href="#addnew" data-toggle="modal" class="btn btn-circle btn-primary" data-tooltip
                           data-placement="bottom" title="Add Event History">
                        <span class="icon">
                        <i class="fas fa-plus"></i>
                        </span>
                        </a>
                        </span>
                        <?php include('includes/bulletin_events/add_bulletin.php'); ?>
                        <hr>
                        <div class="row">
                           <?php
                              include('includes/connect.php');
                              $view=mysqli_query($conn,"SELECT * FROM bulletin_events ORDER BY be_id DESC");
                              while($row=mysqli_fetch_array($view)){
                               ?>
                           <div class="col-lg-4">
                              <!-- Overflow Hidden -->
                              <div class="card-sm mb-4 border-left-primary">
                                 <div class="card-header py-3">
                                    <h6 class="m-0 text-danger"><?php echo $row["be_title"]; ?></h6>
                                 </div>
                                 <div class="text-center">
                                    <img class="card-img-top p-3" style="height: 190px; width: 95%;" src="includes/bulletin_events/image_view.php?be_id=<?php echo $row["be_id"]; ?>">
                                 </div>
                                 <hr style="width: 85%;" class="mb-0">
                                 <div class="card-body text-primary">

                                    <div class="row card-semi mb-2">
                                       <div class="col-lg card-final">
                                          <a class="final collapsed" data-toggle="collapse" href="#collapseDate<?php echo $row["be_id"]; ?>" role="button" aria-expanded="false" aria-controls="collapseDate<?php echo $row["be_id"]; ?>">
                                             <i class="fas font-weight-light text-danger fa-fw fa-sm fa-calendar-alt"></i>
                                             <span class="font-weight-bold">Date</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="collapse mb-2 w-100" id="collapseDate<?php echo $row["be_id"]; ?>">
                                       <div class="card card-body-sm border border-primary">
                                          <div style="font-size: small" class="text-danger">
                                             <?php echo date("jS F, Y", strtotime($row['be_date'])); ?>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row card-semi mb-2">
                                       <div class="col-lg card-final">
                                          <a class="final collapsed" data-toggle="collapse" href="#collapseTime<?php echo $row["be_id"]; ?>" role="button" aria-expanded="false" aria-controls="collapseTime<?php echo $row["be_id"]; ?>">
                                             <i class="fas font-weight-light text-danger fa-fw fa-sm fa-clock"></i>
                                             <span class="font-weight-bold">Time</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="collapse mb-2 w-100" id="collapseTime<?php echo $row["be_id"]; ?>">
                                       <div class="card card-body-sm border border-primary">
                                          <div style="font-size: small" class="text-danger">
                                             <?=date('h:i A', strtotime($row['be_time'])); ?>   
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row card-semi mb-2">
                                       <div class="col-lg card-final">
                                          <a class="final collapsed" data-toggle="collapse" href="#collapseAbout<?php echo $row["be_id"]; ?>" role="button" aria-expanded="false" aria-controls="collapseAbout<?php echo $row["be_id"]; ?>">
                                             <i class="fas font-weight-light text-danger fa-fw fa-sm fa-exclamation"></i>
                                             <span class="font-weight-bold">About</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="collapse mb-2 w-100" id="collapseAbout<?php echo $row["be_id"]; ?>">
                                       <div class="card card-body-sm border border-primary">
                                          <div style="font-size: small" class="text-danger text-justify">
                                             <?=$row['be_about']; ?>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="text-center card-footer pt-2">
                                       <a data-toggle="modal" class="btn btn-outline-warning btn-circle" data-tooltip data-placement="bottom" title="Update"><i class="fas fa-edit"></i></a>
                                       <a href="#del<?php echo $row['be_id']; ?>" data-toggle="modal" class="btn btn-outline-danger btn-circle" data-tooltip data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                 </div>
                                 <?php include('includes/bulletin_events/update_bulletin.php'); ?>
                                 <?php include('includes/bulletin_events/delete_bulletin.php'); ?>
                              </div>
                           </div>
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
      </div>
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
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

      <script src="js/bulletin_events.js"></script>

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

<script type="text/javascript">
    function readURL2(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagePreviewAuthor'+ id +'').attr('src', e.target.result);
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