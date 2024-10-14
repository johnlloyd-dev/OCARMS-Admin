<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <form method="POST" action="includes/user/user_logout_con.php">
         <div class="modal-header">
            <h5 class="p-3 mb-2 bg-primary text-white">
               <i class="fas fa-hands">
               </i> Ready To Leave?
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
            </button>
         </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
               <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal"><i class="far fa-times-circle"></i> Cancel</button>
               <button type="submit" name="logout" class="btn btn-danger btn-sm"><i class="fas fa-sign-in-alt"></i> Logout</button>
            </div>
         </form>
      </div>
   </div>
</div>