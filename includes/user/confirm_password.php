<?php
include('conn.php');
    session_start();
    
    $mpass= $_POST['main_pass'];
    $cpass= $_POST['confirm_pass'];

    if($mpass===$cpass){
        echo "Password Match!";
    }
    else{
        echo "Password Don't Match!";
    }
?>