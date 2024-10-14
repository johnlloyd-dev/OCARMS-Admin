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
   <title>General Monetary Benefactors Page</title>

   <link href="images/favicon.ico" rel="icon">
   
   <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
   <link href="css/fonts.googleapis.css" rel="stylesheet">
   <link href="css/sweetalert.css" rel="stylesheet">
   <link href="css/min.css?v=<?=date('s');?>" rel="stylesheet">
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.jqueryui.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
   <style>
         div.dt-button-collection {
            width: 300px;
         }
         table.display tbody tr td{
         color: black;
         padding-left: 15px;
      }

      #example > tbody > tr >td:last-child,
      #example > thead > tr >th:last-child,
      #example > tfoot > tr >th:last-child {
          text-align: center; 
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
               <img class="img" src="images/DSWD-LOGO 2.png">
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
               <div class="card shadow mb-4">
                  <div class="card-header py-3">
                     <h3 class="m-0 text-primary">General Monetary Benefactors</h3>
                  </div>
                  <div class="card-body">
                     <span class="pull-left mb-1">
                        <a href="#addNewGD" data-toggle="modal" class="btn btn-circle btn-primary" data-tooltip
                           data-placement="bottom" title="Add Beneficiary">
                           <span class="icon">
                              <i class="fas fa-plus"></i>
                           </span>
                        </a>
                     </span>
                     <?php include('includes/general_monetary_donor/add_general_donor.php'); ?>
                     <div class="table-responsive">
                     <hr style="width: 100%;">
                        <table id="example" class="table display rounded border-left-primary table-bordered" style="width:100%">
                        <thead>
                              <tr>
                                 <th>Donation Date</th>
                                 <th>Name</th>
                                 <th>Contact Number</th>
                                 <th>Email Address</th>
                                 <th>Donation Type</th>
                                 <th>Donation Amount</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                           <?php
                                 include('includes/connect.php');
                                 $query=mysqli_query($conn,"SELECT * FROM monetary_donation_info WHERE donation_type = 'Open Donation'");
                                 while($row=mysqli_fetch_assoc($query)){
                                    $client_id = $row['client_id'];
                                 $query2=mysqli_query($conn,"SELECT * FROM client_information WHERE client_id = '$client_id'");
                                 $client=mysqli_fetch_assoc($query2);
                           ?>
                              <tr>
                                 <td><?php echo date("l jS \of F Y", strtotime($row['donation_date'])); ?></td>
                                 <td><?php echo $client['client_fname']; echo " "; echo $client['client_lname'];?></td>
                                 <td><?php echo $client['client_contact_number'];?></td>
                                 <td><?php echo $client['client_email_address'];?></td>
                                 <td><?php echo $row['donation_type']; ?></td>
                                 <td><?php echo $row['donation_amount']; ?></td>
                                 <td>
                                    <?php
                                       if($client['google_id'] != null){
                                    ?>
                                       <a href='#update_s<?=$row['donation_id'];?>' data-toggle="modal" class="btn btn-warning btn-circle btn-sm" data-tooltip data-placement="bottom" title="Update"><i class="fas fa-edit"></i></a>
                                    <?php
                                       }else{
                                          ?>
                                          <a href='#update<?=$row['donation_id'];?>' data-toggle="modal" class="btn btn-warning btn-circle btn-sm" data-tooltip data-placement="bottom" title="Update"><i class="fas fa-edit"></i></a>
                                          <?php
                                       }
                                    ?>
                                    <a href="#delete<?=$row['donation_id'];?>" data-toggle="modal" class="btn btn-danger btn-circle btn-sm" data-tooltip data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                 </td>
                              </tr>
                           <?php include('includes/general_monetary_donor/update_general_donor.php'); ?>
                           <?php include('includes/goods_campaign/delete_donor_info.php'); ?>                           <?php
                              }
                           ?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>Donation Date</th>
                                 <th>Name</th>
                                 <th>Contact Number</th>
                                 <th>Email Address</th>
                                 <th>Donation Type</th>
                                 <th>Donation Amount</th>
                                 <th>Action</th>
                              </tr>
                           </tfoot>
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

   <script src="js/general_donor_actions.js"></script>
   <script src="js/image_preview.js"></script>

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