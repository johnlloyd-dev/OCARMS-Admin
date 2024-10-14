<?php
include('conn.php');
    session_start();
    
    $user_id= $_POST['user_id'];
    $email_query = "SELECT * FROM userinfo WHERE u_username =  '$user_id'";
    $email_query_run = mysqli_query($conn, $email_query);

    if(mysqli_num_rows( $email_query_run) > 0){
        echo "Username Already Taken. Please Choose Another One!";
    }
    else{
        echo "It's Available!";
    }
?>