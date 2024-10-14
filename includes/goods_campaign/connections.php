<?php
include '../connect.php';

session_start();

    // Add Goods Donation Connection
if(isset($_POST['add_goodsID'])){
       
    $imgData = addslashes(file_get_contents($_FILES['g_image']['tmp_name']));
    $imageProperties = getimageSize($_FILES['g_image']['tmp_name']);

    $g_class = $_POST['g_class'];
    $description = $_POST['description'];
    $date = $_POST['date'];

        $client_id = $_POST['add_goodsID'];

        $query2 = "INSERT INTO goods_donation (donation_date, goods_classification, goods_description, pickup_location, donation_status, goods_photo, image_type, profile_display, client_id) VALUES ('$date', '$g_class', '$description', 'N/A', 'Received', '$imgData', '{$imageProperties['mime']}', 'Not Anonymous', '$client_id')";
        $query_run2 = mysqli_query($conn, $query2);


    if($query_run2){

        $_SESSION['client_id'] = $client_id;
        $_SESSION['status'] = "Donation Added!";
        $_SESSION['text'] = "A goods donation from this donor is added successfully!";
        $_SESSION['status_code'] = "success";
        header('location:../../summary_table.php');
        exit();
    }else{
        $_SESSION['client_id'] = $client_id;
        $_SESSION['status'] = "Error!";
        $_SESSION['text'] = "Unknown Error Occured!";
        $_SESSION['status_code'] = "error";
        header('location:../../summary_table.php');
        exit();
    
    }

}

    // Update Donation Connection
    if(isset($_POST['donation_info'])){
        $donation_id=$_POST['donation_info'];

        if(isset($_FILES['g_image_edit'])){
            $imgData = addslashes(file_get_contents($_FILES['g_image_edit']['tmp_name']));
            $imageProperties = getimageSize($_FILES['g_image_edit']['tmp_name']);

            $sql = "UPDATE goods_donation SET donation_id = '$donation_id', donation_date = '" . $_POST['date_Edit'] . "', goods_classification = '" . $_POST['g_classEdit'] . "', goods_description = '" . $_POST['descriptionEdit'] . "', goods_photo = '" . $imgData . "', image_type = '" . $imageProperties['mime'] . "' WHERE donation_id = '$donation_id'";
        }else{
            $sql = "UPDATE goods_donation SET donation_id = '$donation_id', donation_date = '" . $_POST['date_Edit'] . "', goods_classification = '" . $_POST['g_classEdit'] . "', goods_description = '" . $_POST['descriptionEdit'] . "' WHERE donation_id = '$donation_id'";
        }


        $query_run = mysqli_query($conn, $sql);
    
        
        if($query_run){
            $_SESSION['client_id'] = $_POST['client_id'];
            $_SESSION['status'] = "Donation Details Updated!";
            $_SESSION['text'] = $sql;
            $_SESSION['status_code'] = "success";
            header('location:../../summary_table_goods.php');
            exit();
        }else{
            $_SESSION['client_id'] = $_POST['client_id'];
            $_SESSION['status'] = "Error!";
            $_SESSION['text'] = "Unknown Error Occured!";
            $_SESSION['status_code'] = "error";
            header('location:../../summary_table_goods.php');
            exit();
        
        }
    }

        // Update Donation Status
        if(isset($_POST['updateDonorStatus'])){
            $donation_id=$_POST['updateDonorStatus'];
        
                $sql = "UPDATE goods_donation SET donation_id = '$donation_id', donation_status = 'Received' WHERE donation_id = '$donation_id'";
    
    
            $query_run = mysqli_query($conn, $sql);
        
            
            if($query_run){
                $_SESSION['client_id'] = $_POST['client_id'];
                $_SESSION['status'] = "Donation Status Updated!";
                $_SESSION['text'] = "Donation status is updated successfully!";
                $_SESSION['status_code'] = "success";
                header('location:../../summary_table_goods.php');
                exit();
            }else{
                $_SESSION['client_id'] = $_POST['client_id'];
                $_SESSION['status'] = "Error!";
                $_SESSION['text'] = "Unknown Error Occured!";
                $_SESSION['status_code'] = "error";
                header('location:../../summary_table_goods.php');
                exit();
            
            }
        }


?>