<!--- Update Event --->
<div class="modal fade" id="update<?php echo $row['ve_id']; ?>" tabindex="-1" role="dialog"
   aria-labelledby="myModalLabel" aria-hidden="true">
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
                  <form method="POST" action="includes/volunteer_activities/connections.php"
                     enctype="multipart/form-data">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top" id="patientInformationHeader">
                        &nbsp;Activity Information
                     </div>
                     <div class="m-3 p-3 border border-left-primary border-bottom-primary rounded">
                        <div class="row">
                           <div class="col-lg-4">
                              <label class="text-dark">Title
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <input type="text" name="titleEdit" value="<?php echo $row['ve_name']; ?>"
                                 class="form-control" required>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-lg-4">
                              <label class="text-dark">About Event
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <textarea rows="3" name="aboutEventEdit" id="aboutEvent" class="form-control text-justify"
                                 required><?php echo $row['ve_about_event']; ?></textarea>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-lg-4">
                              <label class="text-dark">Event Date
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <input type="date" name="eventDateEdit" value="<?php echo $row['ve_date']; ?>"
                                 class="form-control" required>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-lg-4">
                              <label class="text-dark">Event Time
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <input type="time" name="eventTimeEdit" value="<?php echo $row['ve_time']; ?>"
                                 class="form-control" required>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-lg-4">
                              <label class="text-dark">Location
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <textarea rows="2" id="location" name="locationEdit" class="form-control text-justify"
                                 required><?php echo $row['ve_location']; ?> </textarea>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-lg-4">
                              <label class="text-dark">Volunteer Position
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <textarea rows="2" name="vp_edit" class="form-control text-justify"
                                 required><?php echo $row['ve_vol_pos']; ?> </textarea>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-lg-4">
                              <label class="text-dark">Points To Note
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <textarea rows="2" name="ptn_edit" class="form-control text-justify"
                                 required><?php echo $row['ve_pnt_to_note']; ?> </textarea>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-lg-4">
                              <label class="text-dark">Skills Required
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <input type="text" name="sr_edit" value="<?php echo $row['ve_skills_required']; ?>"
                                 class="form-control" required>
                           </div>
                        </div>
                        <hr>
                        <div class="row mt-2">
                           <div class="col-lg-4">
                              <label class="text-dark">Suitable Volunteers
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <input type="text" name="suitableVolunteersEdit"
                                 value="<?php echo $row['ve_suitable_volunteer']; ?>" class="form-control" required>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-lg-4">
                              <label class="text-dark">Target No. of Volunteers
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-7">
                              <input type="text" name="noOFVolunteerEdit" value="<?php echo $row['ve_target_nov']; ?>"
                                 class="form-control" required>
                           </div>
                        </div>
                        <div class="row mt-2 align-items-center">
                           <div class="col-lg-3">
                              <label class="text-dark">Cover Image
                              </label>
                           </div>
                           <div class="col-lg-1">:</div>
                           <div class="col-lg-5">
                              <input type="file" name="imageEdit" id="image" accept="image/*" class="form-control"
                                 data-tooltip data-placement="bottom"
                                 title="Ignore choosing another image if not needed!"
                                 onchange="readURL(this, <?php echo $row['ve_id']; ?>);">
                           </div>
                           <div class="col-lg-3">
                              <img id="imagePreview<?php echo $row['ve_id']; ?>"
                                 src="includes/volunteer_activities/image_view.php?ve_id=<?php echo $row["ve_id"]; ?>" width="150px" height="100px" />
                           </div>
                        </div>

                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">
                           <i class="far fa-times-circle">
                           </i> Cancel
                        </button>
                        <button type="submit" name="updateEvent" value="<?php echo $row['ve_id']; ?>"
                           class="btn btn-warning btn-sm">
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