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
   <title>Summary Table Page</title>
   <link href="images/favicon.ico" rel="icon">
   <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
   <link href="css/fonts.googleapis.css" rel="stylesheet">
   <link href="css/sweetalert.css" rel="stylesheet">
   <link href="css/min.css?v=<?=date('s');?>" rel="stylesheet">
   <link href="css/jquery-ui.css" rel="stylesheet">
   <link href="css/dataTables.jqueryui.min.css" rel="stylesheet">
   <link href="css/buttons.jqueryui.min.css" rel="stylesheet">
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
            <?php 
               include('includes/header.php');

               if (isset($_GET['client_id'])){
                  $client_id=$_GET['client_id'];
               }elseif(isset($_SESSION['client_id'])){
                  $client_id=$_SESSION['client_id'];
               } 

               $client_run = mysqli_query($conn, "SELECT * FROM client_information WHERE client_id = '$client_id'");
               $client = mysqli_fetch_assoc($client_run);

               if($client['image_type']==null && $client['client_image']!=null){
                  $src = $client['client_image'];
               }else if($client['client_image']==null && $client['image_type']==null){
                  $src = "images/Logo.png";
               }else if($client['client_image']!=null && $client['image_type']!=null){
                  $src = "includes/image_view.php?client_id=$client_id";
               }

            ?>
            <div class="container-fluid">
               <div class="card shadow mb-4">
                  <div class="card-header py-3">
                     <h3 class="m-0 text-primary">Summary Table - Monetary Donation</h3>
                  </div>
                  <div class="card-body">
                     <div class="card">
                        <div class="card-header">
                           <h6 class="font-weight-bold">Donor Personal Information</h6>
                        </div>
<!------------------------------------ Donor Information Start ------------------------------------>
                        <?php include("includes/donor_information.php"); ?>
<!------------------------------------ Donor Information End ------------------------------------>
                     </div>
                     <hr style="width: 100%;">
                     <div class="row mt-3">
 <!------------------------------------ Monetary Donation Start ------------------------------------>
                        <div class="col-12">
                           <div class="card mb-4">
                              <div class="card-header py-3">
                                 <h5 class="m-0 font-weight-bold text-danger">Monetary Donations</h5>
                              </div>
                              <div class="card-body table-responsive">
                              <div class="mb-5">
                                    <span class="pull-left mb-3">
                                       <a href="#addnew<?=$client_id;?>" data-toggle="modal" data-tooltip data-placement="bottom" title="Add donation from this benefactor"
                                       class="btn btn-circle btn-primary">
                                          <span class="icon">
                                             <i class="fas fa-plus"></i>
                                          </span>
                                       </a>
                                    </span>
                                 </div>
                                 <hr>
                                 <?php include('includes/general_monetary_donor/add_open_donation.php'); ?>
                                 <table id="example1" class="table table-bordered display border border-left-primary rounded" style="width:100%">
                                    <thead>
                                       <tr>
                                          <th>Donation Date</th>
                                          <th>Donation Amount</th>
                                          <th>Donation Method</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                       include('includes/connect.php');
                                       $query=mysqli_query($conn,"SELECT * FROM monetary_donation_info WHERE client_id = '$client_id'");
                                       while($row=mysqli_fetch_array($query)){
                                       $fundraise_id = $row['fundraise_id'];
                                       $query2=mysqli_query($conn,"SELECT * FROM campaigns_monetary WHERE fundraise_id = '$fundraise_id'");
                                       $row2=mysqli_fetch_array($query2);
                                    ?>
                                       <tr>
                                          <td><?=$row['donation_date'];?></td>
                                          <td><?=$row['donation_amount'];?></td>
                                          <td><?=$row['donation_method']; ?></td>
                                          <!-- <td><?=$row['donation_type']; ?></td>
                                          <td><?=$row['donation_status']; ?></td>
                                          <?php if($fundraise_id!=null){
                                          ?>
                                             <td><?=$row2['fundraise_title']; ?></td>
                                          <?php } else {?>
                                             <td>None</td>
                                          <?php }?> -->
                                          <td>
                                             <?php
                                                if($client['google_id'] != null){
                                             ?>
                                                <a data-toggle="modal" class="btn btn-warning btn-circle btn-sm" data-tooltip data-placement="bottom" title="You can't update this donation"><i class="fas fa-edit"></i></a>
                                                <a data-toggle="modal" class="btn btn-danger btn-circle btn-sm" data-tooltip data-placement="bottom" title="You can't delete this donor"><i class="fas fa-trash-alt"></i></a>
                                                <button type="button" class="btn btn-sm btn-circle btn-primary" data-toggle="modal" data-target="#generalModal<?=$row['donation_id'];?>"><i class="fas text-white fa-info"></i></button>
                                             <?php
                                                }else{
                                             ?>
                                                <a href='#update_donation<?=$row['donation_id'];?>' data-toggle="modal" class="btn btn-warning btn-circle btn-sm" data-tooltip data-placement="bottom" title="Update"><i class="fas fa-edit"></i></a>
                                                <a href="#delete_donation<?=$row['donation_id'];?>" data-toggle="modal" class="btn btn-danger btn-circle btn-sm" data-tooltip data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                <button type="button" class="btn btn-sm btn-circle btn-primary" data-toggle="modal" data-target="#generalModal<?=$row['donation_id'];?>"><i class="fas text-white fa-info"></i></button>
                                             <?php
                                                }
                                             ?>
                                          </td>
                                       </tr>
                                       <?php 
                                          include("includes/general_monetary_donor/update_general_donor.php");
                                          include("includes/general_monetary_donor/delete_general_donor.php");
                                          include("includes/general_monetary_donor/more_info_modal.php");
                                          }
                                       ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
<!------------------------------------ Monetary Donation End ------------------------------------>
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

   <script src="js/request_actions.js"></script>

   <script>
            function readURL(input, id) {
         if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
               $('#imagePreview'+id).attr('src', e.target.result);
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