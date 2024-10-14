<!--- Add Beneficiaries--->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Register Event
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
            </button>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="border mt-3 rounded">
                  <form method="POST" action="includes/volunteer_activities/connections.php" enctype="multipart/form-data">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Event Information
                     </div>
                     <div id="modal-field">
                        <div class="row justify-content-center">
                        <div class="col-lg-10 p-3 border border-left-primary border-bottom-primary rounded">

                        <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="title">Title:</label>
                                        <input type="text" name="title" id="title" class="form-control" required>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="eventDate">Event Date</label>
                                        <input type="date" name="eventDate" id="eventDate" class="form-control" required>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="eventTime">Event Time:</label>
                                        <input type="time" name="eventTime" id="eventTime" class="form-control" required>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="aboutEvent">About Event:</label>
                                        <textarea rows="3" name="aboutEvent" id="aboutEvent" class="form-control text-justify" required></textarea>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="location">Location</label>
                                        <textarea rows="3" id="location" name="location" class="form-control text-justify" required> </textarea>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="volunteer_position">Volunteer Position:</label>
                                        <textarea rows="3" name="volunteer_position" id="volunteer_position" class="form-control text-justify" required></textarea>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="p_t_n">Points To Note</label>
                                        <textarea rows="3" id="p_t_n" name="p_t_n" class="form-control text-justify" required> </textarea>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="skills_required">Skills Required:</label>
                                        <input type="text" name="skills_required" id="skills_required" class="form-control" required>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="coverImage">Cover Image:</label>
                                        <input type="file" accept="image/*" name="coverImage" id="coverImage" class="form-control" required>
                                      </div>
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
                                 <textarea type="text" name="suitableVolunteers" id="suitableVolunteers" class="form-control" required> </textarea>
                                 </div>
                              </div>
                              <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Target No. of Volunteers
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                    <input type="text" name="noOFVolunteer" id="noOFVolunteer" class="form-control" required>
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
                        <button type="submit" name="addpatientbtn" class="btn btn-warning btn-sm">
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