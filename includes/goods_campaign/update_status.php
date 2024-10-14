<!--- Update Donor--->
<div class="modal fade" id="update_s<?=$row['donation_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Update Status
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
            </button>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="border mt-3 rounded">
                  <form method="POST" action="includes/goods_campaign/connections.php">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Donation Status
                     </div>
                     <div id="modal-field">
                        <div class="m-3 p-3 border-left-primary border-bottom-primary rounded">
                                 <div class="row mt-2">
                                    <div class="col-lg-4">
                                       <label for="g_class">Goods Classification
                                       </label>
                                    </div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-7">
                                       <input disabled type="text" id="g_class" class="form-control" value="<?=$row['goods_classification'];?>" required placeholder="e.g. clothing, foods, books, etc.">
                                    </div>
                                 </div>
                                 <div class="row mt-2">
                                    <div class="col-lg-4">
                                       <label for="description">Goods Description
                                       </label>
                                    </div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-7">
                                    <textarea type="text" disabled id="description" class="form-control" required><?=$row['goods_description'];?></textarea>
                                    </div>
                                 </div>
                                 <div class="row align-items-center mt-2">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="g_image">Goods Photo:</label>
                                        <input disabled type="file" class="form-control" accept="image/*" id="g_image" onchange="readURL2(this, <?=$row['donation_id'];?>);">
                                      </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                       <img id="imagePreview<?=$row['donation_id'];?>" src="includes/goods_campaign/image_view_goods.php?donation_id=<?=$row["donation_id"]; ?>" style="object-fit: cover;" width="100px" height="110px">
                                    </div>
                                 </div>
                              <div class="row">
                                 <div class="col-lg-4">
                                    <label for="d_statusEdit">Donation Status
                                    </label>
                                 </div>
                                 <input type="hidden" name="client_id" value="<?=$client_id?>">
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                 <select required class="form-select form-control" id="d_statusEdit" name="d_statusEdit">
                                    <option value="Pending" <?php if($row['donation_status']=="Pending"){echo "Selected";} ?> >Pending</option>
                                    <option value="Received" <?php if($row['donation_status']=="Received"){echo "Selected";} ?> >Received</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">
                        <i class="far fa-times-circle">
                        </i> Cancel
                        </button>
                        <button type="submit" id="updateDonorStatus" name="updateDonorStatus" value="<?=$row['donation_id'];?>" class="btn btn-warning btn-sm">
                        <i class="far fa-check-circle">
                        </i> Update
                        </button>
                     </div>
               </div>
            </div>
         </div>
         </form>
      </div>
   </div>
</div>