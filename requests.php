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
   <title>Requests Page</title>
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
         <li class="nav-item active">
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
            <?php 
               include('includes/header.php');
               include("includes/request_data.php"); 
            ?>
            <div class="container-fluid">
               <div class="card shadow mb-4">
                  <div class="card-header py-3">
                     <h3 class="m-0 text-primary">Requests</h3>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary shadow h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          Total
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$total_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Cadulawan">Cadulawan</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$cadulawan_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Calajo-an">Calajo-an</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$calajo_an_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Camp 7">Camp 7</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$camp_7_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Camp 8">Camp 8</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$camp_8_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Cuanos">Cuanos</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$cuanos_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Guindaruhan">Guindaruhan</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$guindaruhan_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Linao-Lipata">Linao-Lipata</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$linao_lipata_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Manduang">Manduang</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$manduang_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Pakigne">Pakigne</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$pakigne_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Poblacion Ward I">Poblacion Ward I</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$ward_1_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Poblacion Ward II">Poblacion Ward II</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$ward_2_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Poblacion Ward III">Poblacion Ward III</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$ward_3_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Poblacion Ward IV">Poblacion Ward IV</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$ward_4_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Tubod">Tubod</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$tubod_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Tulay">Tulay</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$tulay_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Tunghaan">Tunghaan</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$tunghaan_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Tungkil">Tungkil</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$tungkil_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Tungkop">Tungkop</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$tungkop_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                           <div class="card-sm-2 border-bottom-primary h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                          <a class="stretched-link" href="request_table.php?barangay=Vito">Vito</a>
                                       </div>
                                       <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$vito_run;?></div>
                                       <div class="text-xs mt-2 mb-0 font-weight-bold text-danger text-center">Pending
                                          Requests</div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
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

   <script>
            $(function () {
  $('[data-tooltip]').tooltip({
    trigger : 'hover'
   });
});
         </script>

   <script>
      $(document).ready(function () {
         $('#dataTable').DataTable({
            "order": [
               [0, "desc"]
            ]
         });
      });
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