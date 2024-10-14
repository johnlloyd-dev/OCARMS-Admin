<?php
   session_start();
   require 'includes/connect.php';
   $count1=mysqli_query($conn,"SELECT COUNT(fundraise_id) as _count1 FROM campaigns_monetary");
   $row1=mysqli_fetch_array($count1);
   $counter1 = $row1["_count1"];

   $count3=mysqli_query($conn,"SELECT COUNT(id) as _count3 FROM payments");
   $row3=mysqli_fetch_array($count3);
   $counter3 = $row3["_count3"];

   $count4=mysqli_query($conn,"SELECT COUNT(donation_id) as _count4 FROM goods_donation WHERE donation_status = 'Received'");
   $row4=mysqli_fetch_array($count4);
   $counter4 = $row4["_count4"];

   $count5=mysqli_query($conn,"SELECT COUNT(request_id ) as _count5 FROM request_info WHERE request_status = 'Approved'");
   $row5=mysqli_fetch_array($count5);
   $counter5 = $row5["_count5"];

   $count2=mysqli_query($conn,"SELECT COUNT(vl_id) as _count2 FROM volunteer_info");
   $row2=mysqli_fetch_array($count2);
   $counter2 = $row2["_count2"];
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Dashboard Page</title>

   <link href="images/favicon.ico" rel="icon">

   <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
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
         <li class="nav-item active">
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
               <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                  <h3 class="m-0 text-primary">Dashboard</h3>
               </div>
               <div class="row">
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card-sm-2 border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Registered Fundraises
                                 </div>
                                 <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$counter1;?></div>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-hands-helping fa-2x text-warning"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card-sm-2 border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Donors
                                 </div>
                                 <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$counter3+$counter4;?>
                                 </div>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-donate fa-2x text-warning"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card-sm-2 border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Approved Requests
                                 </div>
                                 <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$counter5;?></div>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-hand-holding-usd fa-2x text-warning"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card-sm-2 border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Volunteer Signups
                                 </div>
                                 <div class="h5 mb-0 font-weight-bold text-danger text-center"><?=$counter2;?></div>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-hands fa-2x text-warning"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card shadow mb-4">
                  <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Annual Monetary Donation Report - Year <?=date("Y")?></h6>
                  </div>
                  <div class="card-body">
                     <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
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
   <script src="vendor/chart.js/Chart.min.js"></script>
   <script src="js/sweetalert.min.js"></script>
   <script src="js/chart-bar-demo.js"></script>

   <script>
      $(function () {

         $('[data-tooltip]').tooltip({
            trigger: 'hover'
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
   <?=include("includes/chart_data.php");?>
   <script>
   $(document).ready(function () {
      var jan = <?php echo(int) $jan; ?> ;
      var feb = <?php echo(int) $feb; ?> ;
      var mar = <?php echo(int) $mar; ?> ;
      var apr = <?php echo(int) $apr; ?> ;
      var may = <?php echo(int) $mays; ?> ;
      var jun = <?php echo(int) $jun; ?> ;
      var jul = <?php echo(int) $jul; ?> ;
      var aug = <?php echo(int) $aug; ?> ;
      var sep = <?php echo(int) $sep; ?> ;
      var oct = <?php echo(int) $oct; ?> ;
      var nov = <?php echo(int) $nov; ?> ;
      var dec = <?php echo(int) $dec; ?> ;

   let ctx = $("#myBarChart");
   new Chart(ctx, {
   type: 'bar',
   data: {
      labels: ["January", "February", "March", "April", "May", "June", "July", "August",
         "September", "October", "November", "December"
      ],
      datasets: [{
         label: "Total Amount Donated",
         backgroundColor: "#4e73df",
         hoverBackgroundColor: "#2e59d9",
         borderColor: "#4e73df",
         data: [jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dec],
      }],
   },
   options: {
      maintainAspectRatio: false,
      layout: {
         padding: {
            left: 10,
            right: 25,
            top: 25,
            bottom: 0
         }
      },
      scales: {
         xAxes: [{
            time: {
               unit: 'month'
            },
            gridLines: {
               display: false,
               drawBorder: false
            },
            ticks: {
               maxTicksLimit: 12
            },
            maxBarThickness: 25,
         }],
         yAxes: [{
            ticks: {
               min: 0,
               max: 15000,
               maxTicksLimit: 5,
               padding: 10,
               callback: function (value, index, values) {
                  return 'Php ' + number_format(value);
               }
            },
            gridLines: {
               color: "rgb(234, 236, 244)",
               zeroLineColor: "rgb(234, 236, 244)",
               drawBorder: false,
               borderDash: [2],
               zeroLineBorderDash: [2]
            }
         }],
      },
      legend: {
         display: false
      },
      tooltips: {
         titleMarginBottom: 10,
         titleFontColor: '#6e707e',
         titleFontSize: 14,
         backgroundColor: "rgb(255,255,255)",
         bodyFontColor: "#858796",
         borderColor: '#dddfeb',
         borderWidth: 1,
         xPadding: 15,
         yPadding: 15,
         displayColors: false,
         caretPadding: 10,
         callbacks: {
            label: function (tooltipItem, chart) {
               var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
               return datasetLabel + ': Php ' + number_format(tooltipItem.yLabel);
            }
         }
      },
   }
});
});
   </script>
</body>

</html>