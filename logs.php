
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Admin Logs</title>
   <link href="images/favicon.ico" rel="icon">
   <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
   <link href="css/sweetalert.css" rel="stylesheet">
   <link href="css/min.css?v=<?=date('s');?>" rel="stylesheet">

   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.jqueryui.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.jqueryui.min.css">

   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
   <link href="css/ionicons.min.css" rel="stylesheet">
   <style>
      div.dt-button-collection {
         width: 300px;
      }

      .dt-button-collection > div > button:first-child{
            display: none;
         }
         
      table.display tbody tr td{
         color: black;
         padding-left: 15px;
      }
   </style>
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
         <li class="nav-item">
               <a class="nav-link" href="bulletin.php">
               <i class="fas fa-fw fa-newspaper"></i>
                  <span>Bulletin</span></a>
            </li>
            <li class="nav-item active">
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
                     <h3 class="m-0 text-primary">Logs</h3>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <hr style="width: 100%;">
                        <table id="example" class="table border table-bordered display border-left-primary rounded">
                           <thead>
                              <tr>
                                 <th>Date</th>
                                 <th>Time</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <?php
                           include("includes/connect.php");
                              $query = mysqli_query($conn, "SELECT * FROM admin_logs");
                              while($row = mysqli_fetch_assoc($query)){
                           ?>
                           <tbody>
                                 <tr>
                                    <td><?=date("F j, Y", strtotime($row['logs_date']));?></td>
                                    <td><?=date("g:i A", strtotime($row['logs_time']));?></td>
                                    <td><?=$row['logs_action'];?></td>
                                 </tr>
                           </tbody>
                           <?php } ?>
                        </table>
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

   <script src="vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="vendor/datatables/dataTables.jqueryui.min.js"></script>
   <script src="vendor/datatables/dataTables.buttons.min.js"></script>
   <script src="vendor/datatables/buttons.jqueryui.min.js"></script>
   <script src="vendor/datatables/jszip.min.js"></script>
   <script src="vendor/datatables/pdfmake.min.js"></script>
   <script src="vendor/datatables/vfs_fonts.js"></script>
   <script src="vendor/datatables/buttons.html5.min.js"></script>
   <script src="vendor/datatables/buttons.print.min.js"></script>
   <script src="vendor/datatables/buttons.colVis.min.js"></script>
   <script src="vendor/datatables/dataTables.select.min.js"></script>

   <script src="js/goods_donor_actions.js"></script>

   
</body>

</html>