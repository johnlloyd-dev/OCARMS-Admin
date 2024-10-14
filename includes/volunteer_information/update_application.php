<!--- Update Volunteer--->
<div class="modal fade" id="update_application<?=$row['vl_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Update Application
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
                     <div id="modal-field">
                     <div class="m-3 p-3 border border-left-primary border-bottom-primary rounded">
                           <div class="row">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Total Hours
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                    <input type="text" name="total_hours" value="<?=$row['vl_total_hours']; ?>" class="form-control" required>
                                 </div>
                              </div>
                              <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Appointment Status
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                 <select required class="form-select form-control" name="vl_status">
                                 <option disabled>Select One:</option>
                                    <option <?php if($row['vl_status']=="Confirmed/Attended"){echo "selected";}?> value="Confirmed/Attended">Confirmed/Attended</option>
                                    <option <?php if($row['vl_status']=="Confirmed/Cancelled"){echo "selected";}?> value="Confirmed/Cancelled">Confirmed/Cancelled</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">
                        <i class="far fa-times-circle">
                        </i> Cancel
                        </button>
                        <input type="hidden" value="<?=$client_id; ?>" name="client_id">
                        <button type="submit" name="vl_id" value="<?=$row['vl_id']; ?>" class="btn btn-warning btn-sm">
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