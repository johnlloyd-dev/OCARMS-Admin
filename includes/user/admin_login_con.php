<?php
	include('../connect.php');
	session_start();
    if (isset($_POST['username']) && isset($_POST['password'])) {

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

         $uname = validate($_POST['username']);
         $pass = validate($_POST['password']);


         $sql = "SELECT * FROM admin_info WHERE u_username='$uname' AND u_password='$pass'";
         $result = mysqli_query($conn, $sql);
 
         if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
            if ($row['u_username'] === $uname && $row['u_password'] === $pass) {

                mysqli_query($conn, "INSERT INTO admin_logs (logs_action) VALUES ('Admin Login')");

                $_SESSION['status'] = "Welcome!";
                $_SESSION['text'] = "Have a great day!";
                $_SESSION['status_code'] = "success";
                header("location:../../dashboard.php");
		        exit();
            }else{
                $_SESSION['status'] = "Unsucessful!";
                $_SESSION['text'] = "Incorect Username or Password!";
                $_SESSION['status_code'] = "error";
                header("location:../../login.php");
                exit();
			}
		}else{
            $_SESSION['status'] = "Unsucessful!";
            $_SESSION['text'] = "Incorect Username or Password!";
            $_SESSION['status_code'] = "error";
            header("location:../../login.php");
	        exit();
		}
        }else{
            header("location:../../login.php");
            exit();
        }
?>