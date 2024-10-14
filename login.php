<?php
   session_start(); 
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Login</title>
      <link href="images/favicon.ico" rel="icon">
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="css/fonts.googleapis.css" rel="stylesheet">
      <link href="css/sweetalert.css" rel="stylesheet">
      <link href="css/min.css?v=<?=date('s');?>" rel="stylesheet">
   </head>
   <body class="bg-gradient-primary">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
               <div class="card o-hidden border-0 shadow-lg my-5">
                  <div class="card-body p-0">
                     <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                           <div class="p-5">
                              <div class="text-center">
                                 <h1 class="h4 text-gray-900 mb-4">Login</h1>
                              </div>
                              <hr>
                              <form method="POST" action="includes/user/admin_login_con.php">
                                 <div class="form-group">
                                    <label style="position:relative; top:7px; font-weight:bold">Enter Username:</label>
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username" required>
                                 </div>
                                 <div class="form-group">
                                    <label style="position:relative; top:7px; font-weight:bold">Enter Password:</label>
                                    <input type="password" name="password" class="form-control form-control-user" id="InputPassword" placeholder="Password" required>
                                    <div style="height:10px"></div>
                                    <div class="form-check">
                                       <input class="form-check-input" onclick="myFunction()" type="checkbox" id="flexCheckDefault">
                                       <label class="form-check-label" for="flexCheckDefault">
                                       Show Password
                                       </label>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary btn-user btn-block">Login <i class="fas fa-sign-in-alt"></i></button>
                                 <hr>
                              </form>
                              <hr>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="js/sb-admin-2.min.js"></script>
      <script src="js/sweetalert.min.js"></script>
      <script>
         function myFunction() {
         var x = document.getElementById("InputPassword");
         if (x.type === "password") {
             x.type = "text";
         } else {
             x.type = "password";
         }
         }
      </script>
      <?php 
         if(isset($_SESSION['status']) && $_SESSION['status'] !='')
         {
             ?>
      <script>
         swal({
         title: "<?php echo $_SESSION['status']; ?>",
         text: "<?php echo $_SESSION['text']; ?>",
         icon: "<?php echo $_SESSION['status_code']; ?>",
         button: "Done"
         });
      </script>
      <?php
         unset($_SESSION['status']);
         }
         ?>
   </body>
</html>