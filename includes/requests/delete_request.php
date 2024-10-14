<div class="modal fade" id="del<?php echo $row['request_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="delete" aria-modal="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title pt-2 pl-2" id="myModalLabel"><i class="fas fa-exclamation-triangle"></i></h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body text-center">
                      <span>Are you sure to delete this request from the list? This method cannot be undone. 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                        <i class="far fa-times-circle">
                        </i> No
                    </button>
                    <form method="POST" action="includes/requests/connections.php" enctype="multipart/form-data">
                    <input type="hidden" value="<?=$bar; ?>" name="bar">
                          <button type="submit" id="deleteRequest" name="deleteRequest" value="<?=$row['request_id']; ?>" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt">
                            </i> Yes
                        </button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
              


