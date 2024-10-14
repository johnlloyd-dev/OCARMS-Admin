<!--- Add Donor--->
<div class="modal fade" id="addnew<?=$client_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Add Donation
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
            </button>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="border mt-3 rounded">
                  <form method="POST" action="includes/goods_campaign/connections.php" enctype="multipart/form-data">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Donation Information
                     </div>
                     <div id="modal-field">
                        <div class="row justify-content-center">
                           <div class="col-lg-10 p-3 border border-left-primary border-bottom-primary m-1 rounded">
                          <div class="container">

                          <div class="row mt-2">
                                    <div class="col-lg-4">
                                       <label for="date">Date
                                       </label>
                                    </div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-7">
                                       <input type="date" name="date" id="date" class="form-control" required>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row mt-2">
                                    <div class="col-lg-4">
                                       <label for="g_class">Goods Classification
                                       </label>
                                    </div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-7">
                                       <input type="text" name="g_class" id="g_class" class="form-control" required placeholder="e.g. clothing, foods, books, etc.">
                                    </div>
                                 </div>
                                 <div class="row mt-2">
                                    <div class="col-lg-4">
                                       <label for="description">Goods Description
                                       </label>
                                    </div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-7">
                                    <textarea type="text" name="description" id="description" class="form-control" required> </textarea>
                                    </div>
                                 </div>
                                 <div class="row mt-2 align-items-center">
                                    <div class="col-lg-4">
                                       <label for="g_image">Goods Photo
                                       </label>
                                    </div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-7">
                                    <input type="file" accept="image/*" name="g_image" id="g_image" required class="form-control">
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
                        <button type="submit" name="add_goodsID" value="<?=$client_id;?>" id="add_goods" class="btn btn-warning btn-sm">
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