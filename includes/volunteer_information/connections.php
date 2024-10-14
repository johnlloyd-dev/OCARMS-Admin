<?php
include '../connect.php';

session_start();

if(isset($_POST['add_application'])){

    $client_id = $_POST['add_application'];
    $event_id = $_POST['activity'];
    $status = "Confirmed/Pending";
       
    $query = "INSERT INTO volunteer_info (vl_status, event_id, client_id) VALUES ('$status', '$event_id', '$client_id')";
    $query_run = mysqli_query($conn, $query);

    
        if($query_run){
            $_SESSION['status'] = "Application Added!";
            $_SESSION['text'] = "An application is added successfully!";
            $_SESSION['status_code'] = "success";
            $_SESSION['client_id'] = $client_id;
            header('location:../../summary_table_volunteer.php');
            exit();
        }
        else{
            $_SESSION['status'] = "Error!";
            $_SESSION['text'] = "Unknown Error Ocurred!";
            $_SESSION['status_code'] = "error";
            $_SESSION['client_id'] = $client_id;
            header('location:../../summary_table_volunteer.php');
            exit();
        
        }
    }


    // Update Volunteer Connection
    if(isset($_POST['vl_id'])){
        $vl_id = $_POST['vl_id'];
        $client_id = $_POST['client_id'];
        
            $sql = "UPDATE volunteer_info SET vl_id = '$vl_id', vl_status = '{$_POST['vl_status']}', vl_total_hours = '{$_POST['total_hours']}' WHERE vl_id = '$vl_id'";
            $query_run = mysqli_query($conn, $sql);
        
        
            if($query_run){
                $_SESSION['status'] = "Volunteer Updated!";
                $_SESSION['text'] = "Volunteer info is updated successfully!";
                $_SESSION['status_code'] = "success";
                $_SESSION['client_id'] = $client_id;
                header('location:../../summary_table_volunteer.php');
                exit();
            }
            else{
                $_SESSION['status'] = "Error!";
                $_SESSION['text'] = "Unknown Error Ocurred!";
                $_SESSION['status_code'] = "error";
                $_SESSION['client_id'] = $client_id;
                header('location:../../summary_table_volunteer.php');
                exit();
            
            }
        }

        // Delete Donor Connection
        if(isset($_POST['deleteVolunteer'])){
            $id=$_POST['deleteVolunteer'];
            $eventID = $_POST['eventID'];

            $old_image = "SELECT * FROM volunteer_info WHERE vl_id  = '$id'";
            $del_run =  mysqli_query($conn, $old_image);

            foreach($del_run as $row){
                $volunteer_img_path = "../../images/Volunteer-Signups/".$row["vl_image"]; 
                unlink($volunteer_img_path);
            }

                $sql = "DELETE FROM volunteer_info WHERE vl_id = '$id'";
                $query_run = mysqli_query($conn, $sql);
            
                if($query_run){
                    $_SESSION['status'] = "Volunteer Deleted!";
                    $_SESSION['text'] = "A volunteer is deleted successfully!";
                    $_SESSION['status_code'] = "success";
                    $_SESSION['eventID'] = $eventID;
                    header('location:../../volunteer_signups_table.php');
                    exit();
                }
                else{
                    $_SESSION['status'] = "Error!";
                    $_SESSION['text'] = "Unknown Error Ocurred!";
                    $_SESSION['status_code'] = "error";
                    $_SESSION['eventID'] = $eventID;
                    header('location:../../volunteer_signups_table.php');
                    exit();
                
                }
            }
?>