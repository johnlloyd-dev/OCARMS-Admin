<!--- Update Donor--->
<div class="modal fade" id="update_donation<?=$row['donation_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Update Donation
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
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Donation Information
                     </div>
                     <div id="modal-field">
                        <div class="row justify-content-center">
                           <div class="col-lg-10 p-3 border border-left-primary border-bottom-primary m-1 rounded">
                          <div class="container">
                              <div class="row mt-2">
                                    <div class="col-lg-4">
                                       <label for="amount_edit">Donation Date
                                       </label>
                                    </div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-7">
                                       <input type="date" name="date_edit" id="date_edit" class="form-control" value="<?=$row['donation_date'];?>" required>
                                       <input type="hidden" name="client_id" value="<?=$client_id;?>">
                                    </div>
                                 </div>
                                 <div class="row mt-2">
                                    <div class="col-lg-4">
                                       <label for="amount_edit">Donation Amount
                                       </label>
                                    </div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-7">
                                       <input type="text" name="amount_edit" id="amount_edit" class="form-control" value="<?=$row['donation_amount'];?>" required>
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
                        <button type="submit" id="donation_edit" name="donation_edit" value="<?=$row['donation_id'];?>" class="btn btn-warning btn-sm">
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