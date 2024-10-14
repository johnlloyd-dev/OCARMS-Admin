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
   <title>Volunteer Event Page</title>
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
         <li class="nav-item active">
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
                     <h3 class="m-0 text-primary">Volunteer Events</h3>
                  </div>
                  <div class="card-body">
                     <span class="pull-left">
                        <a href="#addnew" data-toggle="modal" class="btn btn-circle btn-primary" data-tooltip
                           data-placement="bottom" title="Add Event">
                           <span class="icon">
                              <i class="fas fa-plus"></i>
                           </span>
                        </a>
                     </span>
                     <?php include('includes/volunteer_activities/add_event.php'); ?>
                     <hr style="width: 100%;">
                     <div class="row mt-3">
                        <?php
                              include('includes/connect.php');
                              $view=mysqli_query($conn,"SELECT * FROM volunteer_event ORDER BY ve_id DESC");
                              while($row=mysqli_fetch_array($view)){
                               ?>
                        <div class="col-lg-4">
                           <!-- Overflow Hidden -->
                           <div class="card-sm mb-4 border-left-primary">
                              <div class="card-header py-3">
                                 <h6 class="m-0 text-danger"><?php echo $row["ve_name"]; ?></h6>
                              </div>
                              <div class="text-center">
                                 <img class="card-img-top p-3" style="height: 190px; width: 95%; object-fit:cover;" src="includes/volunteer_activities/image_view.php?ve_id=<?php echo $row["ve_id"]; ?>">
                              </div>
                              <div class="card-body text-primary">
                                 <div class="row card-semi mb-2">
                                    <div class="col card-final">
                                       <a class="final collapsed" data-toggle="collapse"
                                          href="#collapseAE<?php echo $row["ve_id"]; ?>" role="button"
                                          aria-expanded="false" aria-controls="collapseAE<?php echo $row["ve_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-sm fa-info"></i>
                                          <span class="font-weight-bold"> About Event</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="collapse mb-2 w-100" id="collapseAE<?php echo $row["ve_id"]; ?>">
                                    <div class="card card-body-sm border border-primary">
                                       <div style="font-size: small" class="text-danger text-justify">
                                          <?php echo $row["ve_about_event"]; ?></div>
                                    </div>
                                 </div>
                                 <div class="row card-semi mb-2">
                                    <!-- <div class="col-lg-10 font-weight-bold">Number of Families Affected:</div> -->
                                    <div class="col card-final">
                                       <a class="final collapsed" data-toggle="collapse"
                                          href="#collapseED<?php echo $row["ve_id"]; ?>" role="button"
                                          aria-expanded="false" aria-controls="collapseED<?php echo $row["ve_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-calendar-alt"></i>
                                          <span class="font-weight-bold"> Event Date</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="collapse mb-3 w-100" id="collapseED<?php echo $row["ve_id"]; ?>">
                                    <div class="card card-body-sm border border-primary">
                                       <div style="font-size: small" class="text-danger text-justify">
                                          <?php echo date("jS F, Y", strtotime($row['ve_date'])); ?></div>
                                    </div>
                                 </div>
                                 <div class="row card-semi mb-2">
                                    <!-- <div class="col-lg-10 font-weight-bold"></div> -->
                                    <div class="col card-final">
                                       <a class="final collapsed" data-toggle="collapse"
                                          href="#collapseET<?php echo $row["ve_id"]; ?>" role="button"
                                          aria-expanded="false" aria-controls="collapseET<?php echo $row["ve_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-clock"></i>
                                          <span class="font-weight-bold"> Event Time</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="collapse mb-3 w-100" id="collapseET<?php echo $row["ve_id"]; ?>">
                                    <div class="card card-body-sm border border-primary">
                                       <div style="font-size: small" class="text-danger">
                                          <?php echo date("g:i A", strtotime($row['ve_time'])); ?></div>
                                    </div>
                                 </div>
                                 <div class="row card-semi mb-2">
                                    <div class="col card-final">
                                       <a class="final collapsed" data-toggle="collapse"
                                          href="#collapseL<?php echo $row["ve_id"]; ?>" role="button"
                                          aria-expanded="false" aria-controls="collapseL<?php echo $row["ve_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-map-marker-alt"></i>
                                          <span class="font-weight-bold"> Location</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="collapse mb-2 w-100" id="collapseL<?php echo $row["ve_id"]; ?>">
                                    <div class="card card-body-sm border border-primary">
                                       <div style="font-size: small" class="text-danger">
                                          <?php echo $row["ve_location"]; ?></div>
                                    </div>
                                 </div>




                                 <div class="row card-semi mb-2">
                                    <div class="col card-final">
                                       <a class="final collapsed" data-toggle="collapse"
                                          href="#collapseSV<?php echo $row["ve_id"]; ?>" role="button"
                                          aria-expanded="false" aria-controls="collapseSV<?php echo $row["ve_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-users"></i>
                                          <span class="font-weight-bold"> Suitable Volunteer</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="collapse mb-2 w-100" id="collapseSV<?php echo $row["ve_id"]; ?>">
                                    <div class="card card-body-sm border border-primary">
                                       <div style="font-size: small" class="text-danger">
                                          <?php echo $row["ve_suitable_volunteer"]; ?></div>
                                    </div>
                                 </div>



                                 <div class="row card-semi mb-2">
                                    <div class="col card-final">
                                       <a class="final collapsed" data-toggle="collapse"
                                          href="#collapseVP<?php echo $row["ve_id"]; ?>" role="button"
                                          aria-expanded="false" aria-controls="collapseVP<?php echo $row["ve_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-user"></i>
                                          <span class="font-weight-bold"> Volunteer Position</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="collapse mb-2 w-100" id="collapseVP<?php echo $row["ve_id"]; ?>">
                                    <div class="card card-body-sm border border-primary">
                                       <div style="font-size: small" class="text-danger">
                                          <?php echo $row["ve_vol_pos"]; ?></div>
                                    </div>
                                 </div>



                                 <div class="row card-semi mb-2">
                                    <div class="col card-final">
                                       <a class="final collapsed" data-toggle="collapse"
                                          href="#collapsePTN<?php echo $row["ve_id"]; ?>" role="button"
                                          aria-expanded="false" aria-controls="collapsePTN<?php echo $row["ve_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-sticky-note"></i>
                                          <span class="font-weight-bold"> Points To Note</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="collapse mb-2 w-100" id="collapsePTN<?php echo $row["ve_id"]; ?>">
                                    <div class="card card-body-sm border border-primary">
                                       <div style="font-size: small" class="text-danger">
                                          <?php echo $row["ve_pnt_to_note"]; ?></div>
                                    </div>
                                 </div>



                                 <div class="row card-semi mb-2">
                                    <div class="col card-final">
                                       <a class="final collapsed" data-toggle="collapse"
                                          href="#collapseSR<?php echo $row["ve_id"]; ?>" role="button"
                                          aria-expanded="false" aria-controls="collapseSR<?php echo $row["ve_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-cogs"></i>
                                          <span class="font-weight-bold"> Skills Required</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="collapse mb-2 w-100" id="collapseSR<?php echo $row["ve_id"]; ?>">
                                    <div class="card card-body-sm border border-primary">
                                       <div style="font-size: small" class="text-danger">
                                          <?php echo $row["ve_skills_required"]; ?></div>
                                    </div>
                                 </div>







                                 <div class="row card-semi mb-2">
                                    <div class="col card-final">
                                       <a class="final collapsed" data-toggle="collapse"
                                          href="#collapsePCV<?php echo $row["ve_id"]; ?>" role="button"
                                          aria-expanded="false" aria-controls="collapsePCV<?php echo $row["ve_id"]; ?>">
                                          <i class="fas font-weight-light text-danger fa-fw fa-people-carry"></i>
                                          <span class="font-weight-bold"> Partial Confirmed Volunteers</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="collapse mb-2 w-100" id="collapsePCV<?php echo $row["ve_id"]; ?>">
                                    <div class="card card-body-sm border border-primary">
                                       <div style="font-size: small" class="text-danger">5 out of
                                          <?php echo $row["ve_target_nov"]; ?></div>
                                    </div>
                                 </div>
                                 <div class="text-center card-footer">
                                    <a href="volunteer_signups_table.php?eventID=<?php echo $row['ve_id']; ?>" class="btn btn-outline-primary btn-circle" data-tooltip data-placement="bottom" title="List of Volunteer Signups"><i class="fas fa-users-cog"></i></a>
                                    <a href="#update<?php echo $row['ve_id']; ?>" data-toggle="modal" class="btn btn-outline-warning btn-circle" data-tooltip data-placement="bottom" title="Update Fundraise"><i class="fas fa-edit"></i></a>
                                    <a href="#del<?php echo $row['ve_id']; ?>" data-toggle="modal" class="btn btn-outline-danger btn-circle" data-tooltip data-placement="bottom" title="Delete Fundraise"><i class="fas fa-trash-alt"></i></a>
                                 </div>
                              </div>
                           </div>
                           <?php include('includes/volunteer_activities/update_event.php'); ?>
                           <?php include('includes/volunteer_activities/delete_event.php'); ?>
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

   <script src="js/volunteer_activities.js"></script>

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