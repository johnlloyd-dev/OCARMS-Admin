<?php
	include('conn.php');
	session_start();
	$id=$_POST['updateuser'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
    $username=$_POST['username'];
	$address=$_POST['address'];
	$contactnumber=$_POST['contactnumber'];
	$email=$_POST['email'];


    $email_query1 = "SELECT * FROM userinfo WHERE u_id = '$id'";
    $email_query_run1 = mysqli_query($conn, $email_query1);
	$drow = mysqli_fetch_assoc($email_query_run1);


    $email_query = "SELECT * FROM userinfo WHERE u_username =  '$username'";
    $email_query_run = mysqli_query($conn, $email_query);


	if($drow['u_username']===$username){
		$stmt = "UPDATE userinfo SET u_id='$id', u_firstname='$firstname', u_lastname='$lastname', u_username='$username', u_emailaddress='$email', u_contactnumber	='$contactnumber', u_address='$address' WHERE u_id='$id'";
		$query_run = mysqli_query($conn, $stmt);
	
		if($query_run)
		{
			$sql = "SELECT * FROM userinfo WHERE u_id='$id'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$fname = $row['u_firstname'];
			$lname = $row['u_lastname'];
			$username = $row['u_username'];
			$id = $row['u_id'];
			$action = "User with an ID ($id) and username ($username) is updated!";
	
			$stmt2 = "INSERT INTO logusers (log_username, user_id, log_action) VALUES ('$username', '$id','$action')";
			mysqli_query($conn, $stmt2);
	
			$_SESSION['status'] = "User Updated!";
			$_SESSION['text'] = "The User Info is Updated Successfully!";
			$_SESSION['status_code'] = "success";
			header('location:../users.php');
	
		}
		else{
			$_SESSION['status'] = "Unsucessful!";
			$_SESSION['text'] = "Update Unsuccessful!";
			$_SESSION['status_code'] = "error";
			header('location:../users.php');
		}
	}
    else if($drow['u_username']===$username && mysqli_num_rows($email_query_run) > 0){
        $_SESSION['status'] = "Unsucsessful!";
        $_SESSION['text'] = "Username Already Taken. Please Choose Another One!";
        $_SESSION['status_code'] = "error";
        header("location:../users.php"); 
	    exit();
    }else{
		$stmt = "UPDATE userinfo SET u_id='$id', u_firstname='$firstname', u_lastname='$lastname', u_username='$username', u_emailaddress='$email', u_contactnumber	='$contactnumber', u_address='$address' WHERE u_id='$id'";
		$query_run = mysqli_query($conn, $stmt);
	
		if($query_run)
		{
			$sql = "SELECT * FROM userinfo WHERE u_id='$id'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$fname = $row['u_firstname'];
			$lname = $row['u_lastname'];
			$username = $row['u_username'];
			$id = $row['u_id'];
			$action = "User with an ID ($id) and username ($username) is updated!";
	
			$stmt2 = "INSERT INTO logusers (log_username, user_id, log_action) VALUES ('$username', '$id','$action')";
			mysqli_query($conn, $stmt2);
	
			$_SESSION['status'] = "User Updated!";
			$_SESSION['text'] = "The User Info is Updated Successfully!";
			$_SESSION['status_code'] = "success";
			header('location:../users.php');
	
		}
		else{
			$_SESSION['status'] = "Unsucessful!";
			$_SESSION['text'] = "Update Unsuccessful!";
			$_SESSION['status_code'] = "error";
			header('location:../users.php');
		}
	}
?>