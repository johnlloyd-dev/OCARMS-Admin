<!--- Update Disaster History--->
<div class="modal fade" id="update<?php echo $row['be_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Update Event
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
            </button>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="border mt-3 rounded">
                  <form method="POST" action="includes/bulletin_events/connections.php" enctype="multipart/form-data">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Event's Information
                     </div>
                     <div class="m-3 p-3 border border-left-primary border-bottom-primary rounded">
                        <div class="row">
                           <div class="col-lg-4">
                              <label class="text-dark">Title
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <input type="text" name="titleEdit" value="<?php echo $row['be_title']; ?>" class="form-control" required>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-lg-4">
                              <label class="text-dark">Date
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <input type="date" name="dateEdit" value="<?=$row['be_date']; ?>" class="form-control" required>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-lg-4">
                              <label class="text-dark">Time
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <input type="time" name="timeEdit" value="<?php echo $row['be_time']; ?>" class="form-control" required>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-lg-4">
                              <label class="text-dark">About Event
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <textarea name="aboutEventEdit" class="form-control" required><?php echo $row['be_about']; ?></textarea>
                           </div>
                        </div>

                        <div class="row mt-2 align-items-center">
                           <div class="col-lg-4">
                              <label class="text-dark">Event Image
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <input type="file" name="eventImageEdit" id="imageEdit" accept="image/*" class="form-control" data-tooltip data-placement="bottom" title="Ignore choosing another image if not needed!" onchange="readURL(this, <?php echo $row['be_id']; ?>);">
                           </div>
                        </div>
                        <div class="row mt-2 justify-content-end">
                           <div class="col-lg-7 text-center">
                           <img style="object-fit: cover;" id="imagePreview<?php echo $row['be_id']; ?>" src="includes/bulletin_events/image_view.php?be_id=<?php echo $row["be_id"]; ?>" width="150px" height="100px"/>
                           </div>
                        </div>
                  
                     </div>
                    
                     <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">
                        <i class="far fa-times-circle">
                        </i> Cancel
                        </button>
                        <button type="submit" name="updateEventEdit" value="<?php echo $row['be_id']; ?>" class="btn btn-warning btn-sm">
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