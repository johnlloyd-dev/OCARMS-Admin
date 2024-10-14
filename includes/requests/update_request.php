<!--- Update Approved Requests--->
<div class="modal fade" id="update<?php echo $row['request_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Update Approved Request
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
            </button>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="border mt-3 rounded">
                  <form method="POST" action="includes/requests/connections.php" enctype="multipart/form-data">
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Request's Details
                     </div>
                     <div id="modal-field">
                     <div class="m-3 p-3 border border-left-primary border-bottom-primary rounded">
                     <div class="row">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Date
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                    <input type="date" value="<?php echo $row['request_date']; ?>" name="dateEdit" class="form-control" required>
                                 </div>
                              </div>
                           <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Name
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                    <input type="text" value="<?php echo $row['requester_name']; ?>" name="nameEdit" class="form-control" required>
                                 </div>
                              </div>
                              <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Contact Number
                                    </label>
                                 </div>
                                 <div class="col-1">:</div>
                                 <div class="col-lg-7">
                                    <input type="text" value="<?php echo $row['requester_contactnumber']; ?>" name="contactNumberEdit" class="form-control" required>
                                 </div>
                              </div>
                              <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Barangay
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                 <select name="barangayEdit" required class="form-select form-control">
                           <option disabled>Select Barangay:</option>
                              <option <?php if($row['requester_barangay'] == 'Cadulawan'){echo 'selected';} ?> value="Cadulawan">Cadulawan</option>
                              <option <?php if($row['requester_barangay'] == 'Calajo-an'){echo 'selected';} ?> value="Calajo-an">Calajo-an</option>
                              <option <?php if($row['requester_barangay'] == 'Camp 7'){echo 'selected';} ?>n value="Camp 7">Camp 7</option>
                              <option <?php if($row['requester_barangay'] == 'Camp 8'){echo 'selected';} ?> value="Camp 8">Camp 8</option>
                              <option <?php if($row['requester_barangay'] == 'Cuanos'){echo 'selected';} ?> value="Cuanos">Cuanos</option>
                              <option <?php if($row['requester_barangay'] == 'Guindaruhan'){echo 'selected';} ?> value="Guindaruhan">Guindaruhan</option>
                              <option <?php if($row['requester_barangay'] == 'Linao-Lipata'){echo 'selected';} ?> value="Linao-Lipata">Linao-Lipata</option>
                              <option <?php if($row['requester_barangay'] == 'Manduang'){echo 'selected';} ?> value="Manduang">Manduang</option>
                              <option <?php if($row['requester_barangay'] == 'Pakigne'){echo 'selected';} ?> value="Pakigne">Pakigne</option>
                              <option <?php if($row['requester_barangay'] == 'Poblacion Ward I'){echo 'selected';} ?> value="Poblacion Ward I">Poblacion Ward I</option>
                              <option <?php if($row['requester_barangay'] == 'Poblacion Ward II'){echo 'selected';} ?> value="Poblacion Ward II">Poblacion Ward II</option>
                              <option <?php if($row['requester_barangay'] == 'Poblacion Ward III'){echo 'selected';} ?> value="Poblacion Ward III">Poblacion Ward III</option>
                              <option <?php if($row['requester_barangay'] == 'Poblacion Ward IV'){echo 'selected';} ?> value="Poblacion Ward IV">Poblacion Ward IV</option>
                              <option <?php if($row['requester_barangay'] == 'Tubod'){echo 'selected';} ?> value="Tubod">Tubod</option>
                              <option <?php if($row['requester_barangay'] == 'Tulay'){echo 'selected';} ?> value="Tulay">Tulay</option>
                              <option <?php if($row['requester_barangay'] == 'Tunghaan'){echo 'selected';} ?> value="Tunghaan">Tunghaan</option>
                              <option <?php if($row['requester_barangay'] == 'Tungkil'){echo 'selected';} ?> value="Tungkil">Tungkil</option>
                              <option <?php if($row['requester_barangay'] == 'Tungkop'){echo 'selected';} ?> value="Tungkop">Tungkop</option>
                              <option <?php if($row['requester_barangay'] == 'Vito'){echo 'selected';} ?> value="Vito">Vito</option>
                              </select>
                                 </div>
                              </div>
                              <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Request Status
                                    </label>
                                 </div>
                                 <div class="col-lg-1">:</div>
                                 <div class="col-lg-7">
                                 <select required class="form-select form-control" name="requestStatusEdit">
                                 <option disabled>Select One:</option>
                                    <option <?php if($row['request_status'] == 'Pending'){echo 'selected';} ?> value="Pending">Pending</option>
                                    <option <?php if($row['request_status'] == 'Approved'){echo 'selected';} ?> value="Approved">Approved</option>
                                    <option <?php if($row['request_status'] == 'Rejected'){echo 'selected';} ?> value="Rejected">Rejected</option>
                                    </select>
                                 </div>
                              </div>
                              <hr>
                                  <div class="row mt-2">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Description
                                    </label>
                                 </div>
                                 <div class="col-1">:</div>
                                 <div class="col-lg-7">
                                 <textarea type="text" name="descriptionEdit" class="form-control" required><?=$row['request_description'];?></textarea>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">
                        <i class="far fa-times-circle">
                        </i> Cancel
                        </button>
                        <button type="submit" name="updateRequest" value="<?=$row['request_id'];?>" class="btn btn-warning btn-sm">
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