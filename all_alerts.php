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
                  <main role="main" class="container bootdey.com">
                     <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-blue rounded box-shadow">
                        <img class="mr-3" src="images/DSWD-LOGO.png" alt="" width="48" height="48">
                        <div class="lh-100">
                           <h6 class="mb-0 text-white lh-100">DSWD Minglanilla Office</h6>
                           <small>Minglanilla, Cebu</small>
                        </div>
                     </div>
                     <div class="my-3 p-3 bg-white rounded box-shadow">
                        <h6 class="border-bottom border-gray pb-2 mb-0">Recent Alerts</h6>
                        <?php
                        include("includes/connect.php");
                        $query = mysqli_query($conn, "SELECT * FROM alerts_center ORDER BY alert_id DESC");
                        while($row = mysqli_fetch_assoc($query)){
                     ?>
                        <a href="#" class="media text-muted pt-3 align-items-center d-flex text-decoration-none">
                           <div class="container">
                              <div class="row">
                                 <div class="col-lg-1">
                                    <i class="fas <?php if($row['alert_link']=="request_table.php"){echo "fa-hand-holding";}else if($row['alert_link']=="summary_table_goods.php"){echo "fa-hand-holding-box";}else if($row['alert_link']=="summary_table_volunteer.php"){echo "fa-hand-holding-heart";}else if($row['alert_link']=="summary_table_monetary.php"){echo "fa-hand-holding-usd";} ?> fa-fw fa-lg text-primary"></i>
                                 </div>
                                 <div class="col-lg-8">
                                    <p class="media-body fa-sm pb-3 mb-0 small lh-125 border-bottom border-gray <?php if($row['alert_status']=='Unread'){echo "font-weight-bold";}else{echo "";}?>">
                                       <strong class="d-block text-gray-dark"><?=date("F j, Y", strtotime($row['alert_date']));?></strong>
                                       <?=$row['alert_message'];?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <?php } ?>
                     </div>
                  </main>
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