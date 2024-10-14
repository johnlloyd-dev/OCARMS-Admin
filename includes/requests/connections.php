<?php
include '../connect.php';

session_start();

if(isset($_POST['fullName'])){
foreach ($_POST['fullName'] as $key => $value) {

    $bar = $_POST['bar'];
       
            $query1 = "INSERT INTO request_info (request_date, requester_name, requester_contactnumber, requester_barangay, request_status, request_description) VALUES ('". $_POST['date'][$key]. "', '". $_POST['fullName'][$key] ."', '". $_POST['contactNumber'][$key] ."', '". $_POST['barangay'][$key] ."', '". $_POST['requestStatus'][$key] ."', '". $_POST['description'][$key] ."')";

            $query_run2 = mysqli_query($conn, $query1);
            
        } 
        if($query_run2){
            $_SESSION['status'] = "Request Added!";
            $_SESSION['text'] = "A new request is added successfully!";
            $_SESSION['status_code'] = "success";
            $_SESSION['barangay'] = $bar;
            header('location:../../request_table.php');
            exit();
        }
        else{
            $_SESSION['status'] = "Error!";
            $_SESSION['text'] = "Unknown Error Ocurred!";
            $_SESSION['status_code'] = "error";
            $_SESSION['barangay'] = $bar;
            header('location:../../request_table.php');
            exit();
        
        }
    }


    // Update Donor Connection
    if(isset($_POST['updateRequest'])){
        $id=$_POST['updateRequest'];
        
        $dateEdit = $_POST['dateEdit'];
        $nameEdit = $_POST['nameEdit'];
        $contactNumberEdit = $_POST['contactNumberEdit'];
        $barangayEdit = $_POST['barangayEdit'];
        $requestStatusEdit = $_POST['requestStatusEdit'];
        $descriptionEdit = $_POST['descriptionEdit'];


            $sql = "UPDATE request_info SET request_id = '$id', request_date = '$dateEdit', requester_name = '$nameEdit', requester_contactnumber = '$contactNumberEdit', requester_barangay = '$barangayEdit', request_status = '$requestStatusEdit', request_description = '$descriptionEdit' WHERE request_id = '$id'";
            $query_run2 = mysqli_query($conn, $sql);
        
        
            if($query_run2){
                $_SESSION['status'] = "Request Updated!";
                $_SESSION['text'] = "A request is updated successfully!";
                $_SESSION['status_code'] = "success";
                $_SESSION['barangay'] = $barangayEdit;
                header('location:../../request_table.php');
                exit();
            }
            else{
                $_SESSION['status'] = "Error!";
                $_SESSION['text'] = "Unknown Error Ocurred!";
                $_SESSION['status_code'] = "error";
                $_SESSION['barangay'] = $barangayEdit;
                header('location:../../request_table.php');
                exit();
            
            }
        }

        // Delete Donor Connection
        if(isset($_POST['deleteRequest'])){
            $id=$_POST['deleteRequest'];
            $barangay=$_POST['bar'];


                $sql = "DELETE FROM request_info WHERE request_id = '$id'";
                $query_run = mysqli_query($conn, $sql);
            
                if($query_run){
                    $_SESSION['status'] = "Request Deleted!";
                    $_SESSION['text'] = "A Request is deleted successfully!";
                    $_SESSION['status_code'] = "success";
                    $_SESSION['barangay'] = $barangay;
                    header('location:../../request_table.php');
                    exit();
                }
                else{
                    $_SESSION['status'] = "Error!";
                    $_SESSION['text'] = "Unknown Error Ocurred!";
                    $_SESSION['status_code'] = "error";
                    $_SESSION['barangay'] = $barangay;
                    header('location:../../request_table.php');
                    exit();
                
                }
            }
?>