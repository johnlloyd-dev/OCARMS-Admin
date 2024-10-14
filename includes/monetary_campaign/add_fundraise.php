<!--- Add Fundraise--->
<div class="modal fade" id="addNewFundraise" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Register New Fundraise Campaign
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
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Fundraise' Information
                     </div>
                     <div id="modal-field">
                        <div class="row justify-content-center">
                           <div class="col-lg-10 p-3 m-1 border border-left-primary border-bottom-primary rounded">
                           <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="title">Title:</label>
                                        <input type="text" name="title[]" id="title" class="form-control" required>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="targetAmount">Target Amount:</label>
                                        <input type="text" name="targetAmount[]" id="targetAmount" class="form-control" required>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="targetDays">Target Days:</label>
                                        <input type="text" name="targetDays[]" id="targetDays" class="form-control" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="fundraiseImage">Image:</label>
                                        <input type="file" name="fundraiseImage[]" accept="image/*" id="fundraiseImage" class="form-control" required>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="supportedCauses">Supported Causes:</label>
                                        <input type="text" name="supportedCauses[]" id="supportedCauses" class="form-control" required>
                                      </div>
                                    </div>
                                  </div>

                              <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">About Campaign
                                    </label>
                                 </div>
                                 <div class="col-1">:</div>
                                 <div class="col-lg-7">
                                 <textarea rows="4" name="about[]" class="form-control text-justify" required> </textarea>
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