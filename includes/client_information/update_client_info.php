<!--- Update Donor--->
<div class="modal fade" id="update_client<?=$client_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                    <input type="text" class="form-control" name="first_nameEdit" value="<?=$row['client_fname'];?>" id="first_name">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="form-control" name="last_nameEdit" value="<?=$row['client_lname'];?>" id="last_name">
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="contact_number">Contact Number:</label>
                                    <input type="text" class="form-control" name="contact_numberEdit" value="<?=$row['client_contact_number'];?>" id="contact_number">
                                 </div>
                              </div>
                           </div>
                                  
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="email">Email Address:</label>
                                        <input type="text" class="form-control" name="emailEdit" value="<?=$row['client_email_address'];?>" id="email">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="address">Address:</label>
                                        <input type="text" class="form-control" name="addressEdit" value="<?=$row['client_address'];?>" id="address">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row mt-2">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="donor_image">Donor Photo (Optional):</label>
                                        <input type="file" class="form-control" name="d_image_edit" accept="image/*" id="donor_image" onchange="readURL(this, <?=$client_id;?>);">
                                      </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                       <img id="imagePreview<?=$client_id;?>" src="includes/client_information/image_view_client.php?client_id=<?=$client_id;?>" style="object-fit: cover;" width="100px" height="110px">
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
                        <button type="submit" id="donorIdEdit" name="donorIdEdit" value="<?=$row['donation_id'];?>" class="btn btn-warning btn-sm">
                        <i class="far fa-check-circle">
                        </i> Update
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>