<?php
include '../connect.php';
session_start(); 
    // Add Fundraise Connection
if(isset($_POST['title'])){
foreach ($_POST['title'] as $key => $value) {
        
    $imgData = addslashes(file_get_contents($_FILES['fundraiseImage']['tmp_name'][$key]));
    $imageProperties = getimageSize($_FILES['fundraiseImage']['tmp_name'][$key]);

    
            $query = "INSERT INTO campaigns_monetary(fundraise_title,fundraise_description,fundraise_sprtd_cs,fundraise_target_amount,fundraise_status,fundraise_target_days,fundraise_image, fundraise_image_type) VALUES ('" . $_POST['title'][$key] . "', '" . $_POST['about'][$key] . "', '" . $_POST['supportedCauses'][$key] . "', '" . $_POST['targetAmount'][$key] . "', 'Open', '" . $_POST['targetDays'][$key] . "', '{$imgData}', '{$imageProperties['mime']}')";
            $query_run = mysqli_query($conn, $query);

        }

        if($query_run){
            $_SESSION['status'] = "Fundraise Added!";
            $_SESSION['text'] = "A new Fundraise is added successfully!";
            $_SESSION['status_code'] = "success";
            header('location:../../campaign_monetory.php');
            exit();
        }else{
            $_SESSION['status'] = "Error!";
            $_SESSION['text'] = "Unknown Error Occured!";
            $_SESSION['status_code'] = "error";
            header('location:../../campaign_monetory.php');
            exit();
        
        }

    }


        // Update Fundraise Connection
if(isset($_POST['updateFundraiseID'])){

    $id = $_POST['updateFundraiseID'];

    $fundraise_title = $_POST['titleEdit']; 
    $fundraise_description = $_POST['aboutEdit']; 
    $fundraise_sprtd_cs = $_POST['supportedCausesEdit']; 
    $fundraise_target_amount = $_POST['targetAmountEdit']; 
    $fundraise_target_days = $_POST['targetDaysEdit'];
    $fundraise_status = $_POST['fundraise_status'];
           
    if(!empty($_FILES['fundraiseImageEdit'])){
        $imgData = addslashes(file_get_contents($_FILES['fundraiseImageEdit']['tmp_name']));
        $imageProperties = getimageSize($_FILES['fundraiseImageEdit']['tmp_name']);

        $sql = "UPDATE campaigns_monetary SET fundraise_id = '$id', fundraise_title = '$fundraise_title', fundraise_description = '$fundraise_description', fundraise_sprtd_cs = '$fundraise_sprtd_cs', fundraise_target_amount = '$fundraise_target_amount', fundraise_target_days = '$fundraise_target_days', fundraise_status = '$fundraise_status', fundraise_image = '$imgData', fundraise_image_type = '{$imageProperties['mime']}' WHERE fundraise_id = '$id'";
        $query_run = mysqli_query($conn, $sql);
    }else{
        $sql = "UPDATE campaigns_monetary SET fundraise_id = '$id', fundraise_title = '$fundraise_title', fundraise_description = '$fundraise_description', fundraise_sprtd_cs = '$fundraise_sprtd_cs', fundraise_target_amount = '$fundraise_target_amount', fundraise_target_days = '$fundraise_target_days', fundraise_status = '$fundraise_status', WHERE fundraise_id = '$id'";
        $query_run = mysqli_query($conn, $sql);
    }

            if($query_run){
                $_SESSION['status'] = "Fundraise Updated!";
                $_SESSION['text'] = "A new Fundraise is added successfully!";
                $_SESSION['status_code'] = "success";
                header('location:../../campaign_monetory.php');
                exit();
            }else{
                $_SESSION['status'] = "Error!";
                $_SESSION['text'] = "Unknown Error Occured!";
                $_SESSION['status_code'] = "error";
                header('location:../../campaign_monetory.php');
                exit();
            
            }
    
        }


                // Delete Fundraise Connection
                if(isset($_POST['deleteFundraise'])){
                    $id=$_POST['deleteFundraise'];
        
                    $old_image = "SELECT * FROM campaigns_monetary WHERE fundraise_id  = '$id'";
                    $del_run =  mysqli_query($conn, $old_image);
        
                        $sql = "DELETE FROM campaigns_monetary WHERE fundraise_id = '$id'";
                        $query_run = mysqli_query($conn, $sql);
                    
                    if($query_run){
                        $_SESSION['status'] = "Fundraise Deleted!";
                        $_SESSION['text'] = "A fundraise is deleted successfully!";
                        $_SESSION['status_code'] = "success";
                        header('location:../../campaign_monetory.php');
                        exit();
                    }else{
                        $_SESSION['status'] = "Warning!";
                        $_SESSION['text'] = "You cannot remove a fundraise that is currently active!";
                        $_SESSION['status_code'] = "warning";
                        header('location:../../campaign_monetory.php');
                        exit();
                    
                    }
        }



    ?>