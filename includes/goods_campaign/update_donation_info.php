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
                  <form method="POST" action="includes/goods_campaign/connections.php" enctype="multipart/form-data">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Donation Information
                     </div>
                     <div id="modal-field">
                        <div class="row justify-content-center">
                           <div class="col-lg-10 p-3 border border-left-primary border-bottom-primary m-1 rounded">
                          <div class="container">
                          <input type="hidden" name="client_id" value="<?=$client_id;?>">
                          <div class="row">
                                    <div class="col-lg-4">
                                       <label for="date">Date
                                       </label>
                                    </div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-7">
                                       <input type="date" name="date_Edit" id="date" class="form-control" value="<?=$row['donation_date'];?>" required>
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
                                       <input type="text" name="g_classEdit" id="g_class" class="form-control" value="<?=$row['goods_classification'];?>" required placeholder="e.g. clothing, foods, books, etc.">
                                    </div>
                                 </div>
                                 <div class="row mt-2">
                                    <div class="col-lg-4">
                                       <label for="description">Goods Description
                                       </label>
                                    </div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-7">
                                    <textarea type="text" name="descriptionEdit" id="description" class="form-control" required><?=$row['goods_description'];?></textarea>
                                    </div>
                                 </div>
                                 <div class="row align-items-center mt-2">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="goods_image">Goods Photo:</label>
                                        <input type="file" class="form-control" name="g_image_edit" accept="image/*" onchange="readURL(this);">
                                      </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                       <img id="imagePreview" src="includes/goods_campaign/image_view_goods.php?donation_id=<?=$row["donation_id"]; ?>" style="object-fit: cover;" width="100px" height="110px">
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
                        <button type="submit" id="donation_info" name="donation_info" value="<?=$row['donation_id'];?>" class="btn btn-warning btn-sm">
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