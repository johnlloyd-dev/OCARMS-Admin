<!--- Add Beneficiaries--->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               Register Request
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
                     <div class="p-3 mb-2 bg-primary text-white rounded-top">&nbsp;Request's Information
                     </div>
                     <div id="modal-field">
                        <div class="row justify-content-center">
                        <div class="col-lg-10 m-1 p-3 border border-left-primary border-bottom-primary rounded">

                              <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="fullName">Name:</label>
                                        <input type="text" class="form-control" name="fullName[]" id="fullName" required>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="contact_number">Contact Number:</label>
                                        <input type="text" class="form-control" name="contactNumber[]" id="contact_number" required>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="date">Date:</label>
                                        <input type="date" class="form-control" name="date[]" id="date" required>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="barangay">Barangay:</label>
                                          <select name="barangay[]" required class="form-select form-control" id="barangay">
                                             <option selected disabled>Select Barangay:</option>
                                             <option value="Cadulawan">Cadulawan</option>
                                             <option value="Calajo-an">Calajo-an</option>
                                             <option value="Camp 7">Camp 7</option>
                                             <option value="Camp 8">Camp 8</option>
                                             <option value="Cuanos">Cuanos</option>
                                             <option value="Guindaruhan">Guindaruhan</option>
                                             <option value="Linao-Lipata">Linao-Lipata</option>
                                             <option value="Manduang">Manduang</option>
                                             <option value="Pakigne">Pakigne</option>
                                             <option value="Poblacion Ward I">Poblacion Ward I</option>
                                             <option value="Poblacion Ward II">Poblacion Ward II</option>
                                             <option value="Poblacion Ward III">Poblacion Ward III</option>
                                             <option value="Poblacion Ward IV">Poblacion Ward IV</option>
                                             <option value="Tubod">Tubod</option>
                                             <option value="Tulay">Tulay</option>
                                             <option value="Tunghaan">Tunghaan</option>
                                             <option value="Tungkil">Tungkil</option>
                                             <option value="Tungkop">Tungkop</option>
                                             <option value="Vito">Vito</option>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-group">
                                        <label for="requestStatus">Requests Status:</label>
                                        <select required class="form-select form-control" name="requestStatus[]" id="requestStatus">
                                          <option selected disabled>Select One:</option>
                                          <option value="Pending">Pending</option>
                                          <option value="Approved">Approved</option>
                                          <option value="Rejected">Rejected</option>
                                       </select>
                                      </div>
                                    </div>
                                  </div>

                                  <hr>
                                  <div class="row">
                                 <div class="col-lg-4">
                                    <label class="text-dark">Description
                                    </label>
                                 </div>
                                 <div class="col-1">:</div>
                                 <div class="col-lg-7">
                                 <textarea type="text" name="description[]" id="description" class="form-control" required> </textarea>
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
                        <button type="submit" name="bar" value="<?=$bar;?>" class="btn btn-warning btn-sm">
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