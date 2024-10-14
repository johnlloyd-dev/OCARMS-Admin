<!----Update Username----->
<div class="modal fade" id="updateuser<?php echo $erow['u_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white"><i class="fas fa-fw fas fa-users"></i> Update User Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <?php
               $view=mysqli_query($conn,"SELECT * FROM admin_info WHERE u_id='".$erow['u_id']."'");
               $row=mysqli_fetch_array($view);
               ?>
            <div class="container-fluid">
               <div class="border mt-3 rounded">
                  <form method="POST" action="includes/updateusercon.php">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top" id="patientInformationHeader">&nbsp;User Information</div>
                     <div class="p-2 mt-3" id="patientInformationContent">
                        <div class="row">
                           <div class="col-lg-4 font-weight-bold">
                              <label style="position:relative; top:7px;">Username:</label>
                           </div>
                           <div class="col-lg-7">
                              <input type="text" id="check_username" style="font-style: italic; font-weight: bold" name="username" class="form-control" value="<?php echo $row['u_username']; ?>" required>
                              <small class="error_email" style="color:red;"></small>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal"><i class="far fa-times-circle"></i> Cancel</button>
                        <button type="submit" name="updateuser" value="<?php echo $erow['u_id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-trash-alt"></i> Update</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>



<!----Change Password----->
<div class="modal fade" id="changepassword<?php echo $erow['u_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white"><i class="fas fa-fw fas fa-users"></i> Change User Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="border mt-3 rounded">
                  <form method="POST" action="includes/changepasswordcon.php">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top" id="patientInformationHeader">&nbsp;User Password Input</div>
                     <div class="p-2 mt-3" id="patientInformationContent">
                        <div style="height:10px;"></div>
                        <div class="row">
                           <div class="col-lg-4 font-weight-bold">
                              <label style="position:relative; top:7px;">Last Password:</label>
                           </div>
                           <div class="col-lg-7">
                              <input type="password" style="font-style: italic; font-weight: bold" name="lastpass" id="oldpass" placeholder="Enter Last Password" name="lastpass" class="form-control" required>
                              <div style="height:10px"></div>
                              <div class="form-check">
                                 <input class="form-check-input" onclick="myFunction()" type="checkbox" value="" id="flexCheckDefault">
                                 <label class="form-check-label" for="flexCheckDefault">
                                 Show Password
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                           <div class="col-lg-4 font-weight-bold">
                              <label style="position:relative; top:7px;">New Password:</label>
                           </div>
                           <div class="col-lg-7">
                              <input type="text" id="main_pass" style="font-style: italic; font-weight: bold" placeholder="Enter New Password" name="newpassword" class="form-control" required>
                           </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                           <div class="col-lg-4 font-weight-bold">
                              <label style="position:relative; top:7px;">Confirm New Password:</label>
                           </div>
                           <div class="col-lg-7">
                              <input type="text" id="confirm_password" style="font-style: italic; font-weight: bold" placeholder="Confirm New Password" name="confirmpassword" class="form-control" required>
                              <small class="error_pass" style="color:red;"></small>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal"><i class="far fa-times-circle"></i> Cancel</button>
                        <button type="submit" name="changepassword" value="<?php echo $erow['u_id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-trash-alt"></i> Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>