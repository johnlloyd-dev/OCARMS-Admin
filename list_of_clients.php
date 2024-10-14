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
   <title>Registered Client Page</title>
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
         <li class="nav-item active">
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
                     <h3 class="m-0 text-primary">List of Registered Clients</h3>
                  </div>
                  <div class="card-body">
                     <div class="container">
                        <div class="row">
                           <div class="col-lg-12 mt-3">
                              <a href="#addnew" data-toggle="modal" data-tooltip data-placement="bottom" title="Add Client" class="btn btn-circle btn-primary">
                                    <i class="fas fa-plus"></i>
                              </a>
                              <?php include('includes/client_information/add_client_info.php'); ?>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-12">
                              <hr>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="list-group">
                              <?php
                                 include('includes/connect.php');
                                 $query=mysqli_query($conn,"SELECT * FROM client_information ORDER BY client_id DESC");
                                 while($row=mysqli_fetch_assoc($query)){
                                    $client_id = $row['client_id'];

                                    $count1=mysqli_query($conn,"SELECT COUNT(client_id) as _count1 FROM goods_donation WHERE client_id = $client_id");
                                    $row1=mysqli_fetch_array($count1);
                                    $counter1 = $row1["_count1"];
                                 
                                    $count2=mysqli_query($conn,"SELECT COUNT(client_id) as _count2 FROM monetary_donation_info WHERE client_id = $client_id");
                                    $row2=mysqli_fetch_array($count2);
                                    $counter2 = $row2["_count2"];
                                 
                                    $count3=mysqli_query($conn,"SELECT COUNT(client_id) as _count3 FROM volunteer_info WHERE client_id = $client_id");
                                    $row3=mysqli_fetch_array($count3);
                                    $counter3 = $row3["_count3"];
                                    
                                    if($row['image_type']==null && $row['client_image']!=null){
                                       $src = $row['client_image'];
                                    }else if($row['client_image']==null && $row['image_type']==null){
                                       $src = "images/Logo.png";
                                    }else if($row['client_image']!=null && $row['image_type']!=null){
                                       $src = "includes/image_view.php?client_id=$client_id";
                                    }
                                    
                              ?>  

                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                 <div class="container">
                                    <div class="row align-items-center">
                                       <div class="col-lg-3">
                                          <img class="rounded-circle" src="<?=$src; ?>" width="40rem" height="50rem" style="object-fit: cover;">
                                       </div>
                                       <div class="col-lg-3">
                                          <h6 class="font-weight-bold <?php if($row['google_id'] == ""){echo 'text-danger';}else{'text-dark';} ?>"><?=$row['client_fname']; echo " "; echo $row['client_lname'];?></h6>
                                       </div>
                                       <div class="col-lg-3 text-center">
                                             <a href="summary_table_monetary.php?client_id=<?=$client_id;?>" class="btn btn-sm btn-outline-warning btn-circle" data-tooltip data-placement="bottom" title='<?=$counter2;?> (Monetary Donations)'><i class="fas fa-hands-usd"></i></a>
                                             <a href="summary_table_goods.php?client_id=<?=$client_id;?>" class="btn btn-sm btn-outline-success btn-circle" data-tooltip data-placement="bottom" title='<?=$counter1;?> (Goods Donations)'><i class="fas fa-hand-holding-heart"></i></a>
                                             <a href="summary_table_volunteer.php?client_id=<?=$client_id;?>" class="btn btn-sm btn-outline-primary btn-circle" data-tooltip data-placement="bottom" title='<?=$counter3;?> (Volunteer Applications)'><i class="fas fa-hand-holding-box"></i></a>
                                       </div>
                                       <div class="col-lg-3 text-right">
                                          <?php if($row['google_id'] == "" && $counter1 == 0 && $counter2 == 0 && $counter3 == 0) {?>
                                             <a href="#update_client<?=$client_id;?>" class="btn btn-sm btn-circle btn-outline-warning" data-toggle="modal" data-tooltip data-placement="bottom" title='Update Client Information'><i class="fas fa-edit"></i></a>
                                             <a href="#delete_client<?=$client_id;?>" data-toggle="modal" class="btn btn-outline-danger btn-circle btn-sm" data-tooltip data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                          <?php } else if(($counter1 != 0 || $counter2 != 0 || $counter3 != 0) && ($row['google_id'] == "")) { ?>
                                             <a href="#update_client<?=$client_id;?>" class="btn btn-sm btn-circle btn-outline-warning" data-toggle="modal" data-tooltip data-placement="bottom" title='Update Client Information'><i class="fas fa-edit"></i></a>
                                             <a class="btn btn-outline-danger btn-circle btn-sm" data-tooltip data-placement="bottom" title="You can't delete this client information"><i class="fas fa-trash-alt"></i></a>
                                          <?php } else if(($row['google_id'] != "") && ($counter1 != 0 || $counter2 != 0 || $counter3 != 0)) { ?>
                                             <a class="btn btn-sm btn-circle btn-outline-warning" data-tooltip data-placement="bottom" title="You can't update this client information" ><i class="fas fa-edit"></i></a>
                                             <a class="btn btn-outline-danger btn-circle btn-sm" data-tooltip data-placement="bottom" title="You can't delete this client information"><i class="fas fa-trash-alt"></i></a>
                                          <?php } else if(($row['google_id'] != "") && ($counter1 == 0 || $counter2 == 0 || $counter3 == 0)) { ?>
                                             <a class="btn btn-sm btn-circle btn-outline-warning" data-tooltip data-placement="bottom" title="You can't update this client information" ><i class="fas fa-edit"></i></a>
                                             <a class="btn btn-outline-danger btn-circle btn-sm" data-tooltip data-placement="bottom" title="You can't delete this client information"><i class="fas fa-trash-alt"></i></a>
                                          <?php } ?>
                                       </div>
                                    </div>
                                 </div>
                              </li>   
                              <?php
                                 include("includes/client_information/update_client_info.php");
                                 include("includes/client_information/delete_client_info.php");
                                 }
                              ?>
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