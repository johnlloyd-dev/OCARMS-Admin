<div class="modal fade" id="delete<?php echo $row['fundraise_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="delete" aria-modal="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title pt-2 pl-2" id="myModalLabel"><i class="fas fa-exclamation-triangle"></i></h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-center">
                      <span>Are you sure to delete this Fundraise from the list? This method cannot be undone. 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                        <i class="far fa-times-circle">
                        </i> No
                    </button>
                    <form method="POST" action="includes/monetary_campaign/connections.php" enctype="multipart/form-data">
                          <button type="submit" id="deleteFundraise" name="deleteFundraise" value="<?php echo $row['fundraise_id']; ?>" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt" id="deleteDonorIcon">
                            </i> Yes
                        </button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
              


