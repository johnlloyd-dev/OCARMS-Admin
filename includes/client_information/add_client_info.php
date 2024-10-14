<!--- Add Donor--->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Register Donor
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
            </button>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="border mt-3 rounded">
                  <form method="POST" action="includes/client_information/connections.php" enctype="multipart/form-data">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Donor's Information
                     </div>
                     <div id="modal-field">
                        <div class="row justify-content-center">
                           <div class="col-lg-10 p-3 border border-left-primary border-bottom-primary m-1 rounded">
                          <div class="container">

                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" class="form-control" name="first_name" id="first_name">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="form-control" name="last_name" id="last_name">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="contact_number">Contact Number:</label>
                                    <input type="text" class="form-control" name="contact_number" id="contact_number">
                                 </div>
                              </div>
                           </div>
                                  
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="email">Email Address:</label>
                                        <input type="text" class="form-control" name="email" id="email">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="address">Address:</label>
                                        <input type="text" class="form-control" name="address" id="address">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="d_image">Donor Photo (Optional):</label>
                                        <input type="file" class="form-control" name="d_image" accept="image/*" id="d_image">
                                      </div>
                                    </div>
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
                        <button type="submit" name="insert" id="insert" class="btn btn-warning btn-sm">
                        <i class="far fa-check-circle">
                        </i> Submit
                        </button>
                     </div>
               </div>
            </div>
         </div>
         </form>
      </div>
   </div>
</div>