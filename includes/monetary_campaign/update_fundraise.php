<!--- Update Fundraise--->
<div class="modal fade" id="update<?php echo $row['fundraise_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Update Donor
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
            </button>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="border mt-3 rounded">
                  <form method="POST" action="includes/monetary_campaign/connections.php" enctype="multipart/form-data">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Donor's Information
                     </div>
                     <div id="modal-field">
                     <div class="p-3 m-3 border border-left-primary border-bottom-primary rounded">
                           <div class="row">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Title
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                    <input type="text" name="titleEdit" value="<?php echo $row['fundraise_title'];?>" class="form-control" required>
                                 </div>
                              </div>
                              <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Target Amount
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                    <input type="text" name="targetAmountEdit" class="form-control" value="<?php echo $row['fundraise_target_amount'];?>" required>
                                 </div>
                              </div>
                              <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Target Days
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                    <input type="text" name="targetDaysEdit" value="<?php echo $row['fundraise_target_days'];?>" class="form-control" required>
                                 </div>
                              </div>
                              <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Supported Causes
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                    <textarea type="text" name="supportedCausesEdit" class="form-control" rows="2" required><?php echo $row['fundraise_sprtd_cs'];?></textarea>
                                 </div>
                              </div>
                              <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">About Campaign
                                    </label>
                                 </div>
                                 <div class="col-1">:</div>
                                 <div class="col-lg-7">
                                 <textarea type="text" name="aboutEdit" rows="8" class="form-control text-justify" required><?php echo $row['fundraise_description'];?></textarea>
                                 </div>
                              </div>
                              <hr>
                              <div class="row mt-2 align-items-center">
                                 <div class="col-lg-2">
                                    <label class="text-dark">Image
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-5">
                                    <input type="file" name="fundraiseImageEdit" accept="image/*" class="form-control" data-tooltip data-placement="bottom" title="Ignore choosing another image if not needed!" onchange="readURL(this, <?php echo $row['fundraise_id']; ?>);">
                                 </div>
                                 <div class="col-lg-4">
                                    <img style="object-fit: cover;" id="imagePreview<?php echo $row['fundraise_id']; ?>" src="includes/monetary_campaign/image_view.php?fundraise_id=<?php echo $row["fundraise_id"]; ?>" width="150px" height="100px"/>
                                 </div>
                              </div>
                              <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label for="fundraise_status">Fundraise Status
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                 <select required class="form-select form-control" id="fundraise_status" name="fundraise_status">
                                    <option value="Open" <?php if($row['fundraise_status']=="Open"){echo "Selected";} ?> >Open</option>
                                    <option value="Closed" <?php if($row['fundraise_status']=="Closed"){echo "Selected";} ?> >Closed</option>
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
                        <button type="submit" name="updateFundraiseID" value="<?php echo $row['fundraise_id'];?>" class="btn btn-warning btn-sm">
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