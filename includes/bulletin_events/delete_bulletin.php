<!-- Delete Disaster History -->
<div class="modal fade" id="del<?php echo $row['be_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <form method="POST" action="includes/bulletin_events/connections.php">
            <div class="modal-header">
            <h4 class="modal-title pt-2 pl-2" id="myModalLabel"><i class="fas fa-exclamation-triangle"></i></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;
               </span>
               </button>
            </div>
            <div class="modal-body text-center">
               <span>Are you sure to delete this record from the list? This method cannot be undone. 
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">
               <i class="far fa-times-circle">
               </i> No
               </button>
               <button type="submit" name="deleteEvent" value="<?php echo $row['be_id']; ?>" class="btn btn-danger btn-sm">
               <i class="fas fa-trash-alt">
               </i> Yes
               </button>
            </div>
         </form>
      </div>
   </div>
</div>

