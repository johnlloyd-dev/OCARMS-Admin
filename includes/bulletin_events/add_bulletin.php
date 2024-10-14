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
                  <form method="POST" action="includes/bulletin_events/connections.php" enctype="multipart/form-data">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Event Information
                     </div>
                     <div id="modal-field">
                        <div class="row justify-content-center">
                           <div class="col-lg-10 m-1 p-3 border border-left-primary border-bottom-primary rounded">
                           <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="title">Title:</label>
                                          <input type="text" name="title[]" id="title" class="form-control" required>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="date">Date:</label>
                                          <input type="date" name="date[]" id="date" class="form-control" required>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="time">Time:</label>
                                          <input type="time" name="time[]" id="time" class="form-control" required>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="aboutEvent">About Event:</label>
                                        <textarea rows="3" name="aboutEvent[]" id="aboutEvent" class="form-control" required></textarea>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="coverImage">Event Image:</label>
                                        <input type="file" name="coverImage[]" accept="image/*" id="coverImage" class="form-control" required>
                                      </div>
                                    </div>
                                  </div>

                           </div>
                           <div class="col-lg-1 m-1">
                           <td><button type="button" name="add" id="add" class="btn btn-circle btn-success"><i class="fa fa-plus"></i></button></td>
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