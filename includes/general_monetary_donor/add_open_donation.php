<!--- Add General Donor--->
<div class="modal fade" id="addnew<?=$client_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Add Amount
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
            </button>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="border mt-3 rounded">
                  <form method="POST" action="includes/general_monetary_donor/connections.php" enctype="multipart/form-data">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Amount Information
                     </div>
                     <div id="modal-field">
                        <div class="row justify-content-center">
                           <div class="col-lg-10 p-3 m-1 border border-left-primary border-bottom-primary rounded">
                              <div class="row">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Donation Date
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                    <input type="date" name="date" class="form-control" required>
                                 </div>
                              </div>
                              <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Amount
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                    <input type="text" name="amount" class="form-control" required>
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
                        <button type="submit" name="add_donation" value="<?=$client_id?>" id="add_donation" class="btn btn-warning btn-sm">
                        <i class="far fa-save">
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