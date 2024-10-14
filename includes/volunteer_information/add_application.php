<!--- Add Beneficiaries--->
<div class="modal fade" id="add_application<?=$client_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Add Application
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
            </button>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="border mt-3 rounded">
                  <form method="POST" action="includes/volunteer_information/connections.php" enctype="multipart/form-data">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Application Information
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-lg-10 mb-2 p-3 border border-left-primary border-bottom-primary rounded">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                 <label for="activity">Choose an Activity:</label>
                                 <select required class="form-select form-control" name="activity" id="activity">
                                    <option selected disabled>Select One:</option>
                                    <?php
                                       include("includes/connect.php");
                                       $event = mysqli_query($conn, "SELECT * FROM volunteer_event WHERE ve_status = 'Open'");
                                       while($row = mysqli_fetch_assoc($event)){
                                    ?>
                                    <option value="<?=$row['ve_id'];?>"><?=$row['ve_name'];?></option>
                                    <?php } ?>
                                 </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">
                        <i class="far fa-times-circle">
                        </i> Cancel
                        </button>
                        <button type="submit" name="add_application" value="<?=$client_id;?>" class="btn btn-warning btn-sm">
                        <i class="far fa-save">
                        </i> Save
                        </button>
                     </div>
               </div>
            </div>
         </div>
         </form>
      </div>
   </div>
</div>