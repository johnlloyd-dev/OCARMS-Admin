<?php 
session_start();

include('conn.php');
if (isset($_POST['lastpass']) && isset($_POST['newpassword'])
    && isset($_POST['confirmpassword']) && isset($_POST['changepassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$oldpass = validate($_POST['lastpass']);
	$newpass = validate($_POST['newpassword']);
	$confirmpass = validate($_POST['confirmpassword']);
	$userid = $_POST['changepassword'];
    
	if($newpass !== $confirmpass){
        $_SESSION['status'] = "Unsuccessful!";
        $_SESSION['text'] = "Password Don't Match!";
        $_SESSION['status_code'] = "error";
        header("location:../users.php?");
	  exit();
    }else {

        $sql = "SELECT u_password FROM userinfo WHERE u_id='$userid' AND u_password='$oldpass'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE userinfo SET u_password='$newpass' WHERE u_id='$userid'";
        	mysqli_query($conn, $sql_2);
			$_SESSION['status'] = "User Password Updated!";
			$_SESSION['text'] = "Your new Password is Updated Successfully!";
			$_SESSION['status_code'] = "success";
			header('location:../users.php');
	        exit();

        }else {
			$_SESSION['status'] = "Unsuccessful!";
			$_SESSION['text'] = "Incorrect Password!";
			$_SESSION['status_code'] = "error";
			header("location:../users.php?");
	        exit();
        }

    }

    
}else{
	header("location:../users.php?");
	exit();
}
