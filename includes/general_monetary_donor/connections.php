<?php
include '../connect.php';

session_start();

    // Add Donor Connection
if(isset($_POST['add_donation'])){
       
    $client_id = $_POST['add_donation'];

    $donation_type = "Open Donation";
    $donation_method = "Open";
    $donation_status = "Donated";

    $amount = $_POST['amount'];
    $donation_date = $_POST['date'];

        $query = "INSERT INTO monetary_donation_info (donation_date, donation_amount, donation_type, donation_method, donation_status, client_id) VALUES ('$donation_date', '$amount', '$donation_type', '$donation_method', '$donation_status', '$client_id')";
        $query_run = mysqli_query($conn, $query);


    if($query_run){
        $_SESSION['client_id'] = $client_id;
        $_SESSION['status'] = "Donation Added!";
        $_SESSION['text'] = "An open monetary donation is added successfully!";
        $_SESSION['status_code'] = "success";
        header('location:../../summary_table_monetary.php');
        exit();
    }else{
        $_SESSION['client_id'] = $client_id;
        $_SESSION['status'] = "Error!";
        $_SESSION['text'] = "Unknown Error Occured!";
        $_SESSION['status_code'] = "error";
        header('location:../../summary_table_monetary.php');
        exit();
    
    }

}

    // Update Donor Connection
    if(isset($_POST['donation_edit'])){
        $donation_id=$_POST['donation_edit'];
        $client_id=$_POST['client_id'];
        
            $sql = "UPDATE monetary_donation_info SET donation_id = '$donation_id', donation_date = '" . $_POST['date_edit'] . "', donation_amount = '" . $_POST['amount_edit'] . "' WHERE donation_id = '$donation_id'";
            $query_run = mysqli_query($conn, $sql);
        
        
            if($query_run){
                $_SESSION['client_id'] = $client_id;
                $_SESSION['status'] = "Donation Updated!";
                $_SESSION['text'] = "A donation info is updated successfully!";
                $_SESSION['status_code'] = "success";
                header('location:../../summary_table_monetary.php');
                exit();
            }else{
                $_SESSION['client_id'] = $client_id;
                $_SESSION['status'] = "Error!";
                $_SESSION['text'] = "Unknown Error Occured!";
                $_SESSION['status_code'] = "error";
                header('location:../../summary_table_monetary.php');
                exit();
            
            }
    }

    // Delete Donation Connection
    if(isset($_POST['donation_delete'])){
        $donation_id=$_POST['donation_delete'];
        $client_id=$_POST['client_id'];

        $sql = "DELETE FROM monetary_donation_info WHERE donation_id = '$donation_id'";
        $query_run = mysqli_query($conn, $sql);
        
        if($query_run){
            $_SESSION['client_id'] = $client_id;
            $_SESSION['status'] = "Donation Deleted!";
            $_SESSION['text'] = "A donation info is deleted successfully!";
            $_SESSION['status_code'] = "success";
            header('location:../../summary_table_monetary.php');
            exit();
        }else{
            $_SESSION['client_id'] = $client_id;
            $_SESSION['status'] = "Error!";
            $_SESSION['text'] = "Unknown Error Occured!";
            $_SESSION['status_code'] = "error";
            header('location:../../summary_table_monetary.php');
            exit();
        
        }
    }

?>