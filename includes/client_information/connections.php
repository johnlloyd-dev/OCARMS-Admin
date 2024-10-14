<?php 
include '../connect.php';

session_start();


if(isset($_POST['first_name'])){
       
    $imgData = addslashes(file_get_contents($_FILES['d_image']['tmp_name']));
    $imageProperties = getimageSize($_FILES['d_image']['tmp_name']);

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];

    $query = "INSERT INTO client_information (client_fname, client_lname, client_email_address, client_contact_number, client_address, client_image, image_type) VALUES ('$first_name', '$last_name', '$email', '$contact_number', '$address', '$imgData', '{$imageProperties['mime']}')";
    $query_run = mysqli_query($conn, $query); 


    if($query_run){
        mysqli_query($conn, "INSERT INTO admin_logs (logs_action) VALUES ('Admin added a new client: $first_name $last_name')");
        $_SESSION['status'] = "Client Added!";
        $_SESSION['text'] = "A new client is added successfully!";
        $_SESSION['status_code'] = "success";
        header('location:../../list_of_clients.php');
        exit();
    }else{
        $_SESSION['status'] = "Error!";
        $_SESSION['text'] = "Unknown Error Occured!";
        $_SESSION['status_code'] = "error";
        header('location:../../list_of_clients.php');
        exit();
    
    }

}


    // Update Donor Connection
    if(isset($_POST['donorIdEdit'])){
        $donation_id=$_POST['donorIdEdit'];

        $query=mysqli_query($conn,"SELECT * FROM goods_donation WHERE donation_id = $id");
        $row=mysqli_fetch_assoc($query);

        $client_id = $row['client_id'];

        if(isset($_FILES['d_imageEdit'])){
            $imgData1 = addslashes(file_get_contents($_FILES['d_imageEdit']['tmp_name']));
            $imageProperties1 = getimageSize($_FILES['d_imageEdit']['tmp_name']);

            $sql = "UPDATE client_information SET client_id = '$client_id', client_fname = '" . $_POST['first_nameEdit'] . "', client_lname = '" . $_POST['last_nameEdit'] . "', client_email_address = '" . $_POST['emailEdit'] . "', client_contact_number = '" . $_POST['contact_numberEdit'] . "', client_address = '" . $_POST['addressEdit'] . "', client_image = '" . $imgData1 . "', image_type = '" . $imageProperties1['mime'] . "' WHERE client_id = '$client_id'";

        }else{
            $sql = "UPDATE client_information SET client_id = '$client_id', client_fname = '" . $_POST['first_nameEdit'] . "', client_lname = '" . $_POST['last_nameEdit'] . "', client_email_address = '" . $_POST['emailEdit'] . "', client_contact_number = '" . $_POST['contact_numberEdit'] . "', client_address = '" . $_POST['addressEdit'] . "' WHERE client_id = '$client_id'";
        }

        if(isset($_FILES['g_imageEdit'])){
            $imgData2 = addslashes(file_get_contents($_FILES['g_imageEdit']['tmp_name']));
            $imageProperties2 = getimageSize($_FILES['g_imageEdit']['tmp_name']);

            $sql2 = "UPDATE goods_donation SET donation_id = '$donation_id', donation_date = '" . $_POST['dateEdit'] . "', goods_classification = '" . $_POST['g_classEdit'] . "', goods_description = '" . $_POST['descriptionEdit'] . "', goods_photo = '" . $imgData2 . "', image_type = '" . $imageProperties2['mime'] . "' WHERE donation_id = '$donation_id'";
        }else{
            $sql2 = "UPDATE goods_donation SET donation_id = '$donation_id', donation_date = '" . $_POST['dateEdit'] . "', goods_classification = '" . $_POST['g_classEdit'] . "', goods_description = '" . $_POST['descriptionEdit'] . "' WHERE donation_id = '$donation_id'";
        }


        $query_run1 = mysqli_query($conn, $sql);
        $query_run2 = mysqli_query($conn, $sql2);
    
        
        if( $query_run1 && $query_run2){
            mysqli_query($conn, "INSERT INTO admin_logs (logs_action) VALUES ('Admin updated a client: {$_POST['first_nameEdit']} {$_POST['last_nameEdit']}')");
            $_SESSION['status'] = "Client Details Updated!";
            $_SESSION['text'] = "Client details is updated successfully!";
            $_SESSION['status_code'] = "success";
            header('location:../../list_of_clients.php');
            exit();
        }else{
            $_SESSION['status'] = "Error!";
            $_SESSION['text'] = "Unknown Error Occured!";
            $_SESSION['status_code'] = "error";
            header('location:../../list_of_clients.php');
            exit();
        
        }
    }

    // Delete Client Connection
    if(isset($_POST['delete_client'])){
        $client_id=$_POST['delete_client'];

            $sql = "DELETE FROM client_information WHERE client_id = '$client_id'";
            $query_run = mysqli_query($conn, $sql);
        
            if($query_run){
                mysqli_query($conn, "INSERT INTO admin_logs (logs_action) VALUES ('Admin deleted a client with an ID = $client_id')");
                $_SESSION['status'] = "Client Deleted!";
                $_SESSION['text'] = "A client is deleted successfully!";
                $_SESSION['status_code'] = "success";
                header('location:../../list_of_clients.php');
                exit();
            }else{
                $_SESSION['status'] = "Error!";
                $_SESSION['text'] = "Unknown Error Occured!";
                $_SESSION['status_code'] = "error";
                header('location:../../list_of_clients.php');
                exit();
            
            }
    }



?>