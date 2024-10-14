<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <h5>Online Calamity Assistance Request and Monitoring System</h5>
    <form class="form-inline">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    </form>

    <?php
      include('connect.php');
      $userlog = "SELECT * FROM `admin_info`";
      $user_run = mysqli_query($conn, $userlog);
      $erow = mysqli_fetch_assoc($user_run);
      ?>
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Alerts -->
        <?php
            include("includes/connect.php");
            $query = mysqli_query($conn, "SELECT COUNT(alert_id) AS _count FROM alerts_center WHERE alert_status = 'Unread'");
            $row = mysqli_fetch_assoc($query);
        ?>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                data-tooltip data-placement="bottom" title="Alerts Center" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"><?=$row['_count'];?></span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                <?php
                    include("includes/connect.php");
                    $query = mysqli_query($conn, "SELECT * FROM (SELECT * FROM alerts_center ORDER BY alert_id DESC LIMIT 3) SUB ORDER BY alert_id DESC");
                    while($row = mysqli_fetch_assoc($query)){
                ?>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas text-white <?php if($row['alert_link']=="request_table.php"){echo "fa-hand-holding";}else if($row['alert_link']=="summary_table_goods.php"){echo "fa-hand-holding-box";}else if($row['alert_link']=="summary_table_volunteer.php"){echo "fa-hand-holding-heart";}else if($row['alert_link']=="summary_table_monetary.php"){echo "fa-hand-holding-usd";} ?>"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500"><?=date("F j, Y", strtotime($row['alert_date']));?></div>
                        <span class="<?php if($row['alert_status']=='Unread'){echo "font-weight-bold";}else{echo "";}?>"><?=$row['alert_message'];?></span>
                    </div>
                </a>
                <?php } ?>
                <a class="dropdown-item text-center small text-gray-500" href="all_alerts.php">Show All Alerts</a>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>


        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-dark small"><?php echo $erow['u_username'];?></span>
                <img class="img-profile rounded-circle" src="images/Minglanilla Logo.png">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>


        
    </ul>
</nav>