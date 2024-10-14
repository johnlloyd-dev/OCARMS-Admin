<?php
	include('../connect.php');
	session_start();

    // Add
 if(isset($_POST['title'])){
	foreach ($_POST['title'] as $key => $value) {
		   
        // $coverImage    = $_FILES['coverImage']['name'][$key];
        // $filename_tmp1 = $_FILES['coverImage']['tmp_name'][$key];

        $imgData =addslashes(file_get_contents($_FILES['coverImage']['tmp_name'][$key]));
        $imageProperties = getimageSize($_FILES['coverImage']['tmp_name'][$key]);


        $query1 = "INSERT INTO bulletin_events (be_image, be_image_type, be_title, be_date, be_time, be_about)VALUES ('{$imgData}', '{$imageProperties['mime']}', '" . $_POST['title'][$key] . "', '" . $_POST['date'][$key] . "', '" . $_POST['time'][$key] . "', '" . $_POST['aboutEvent'][$key] . "')";
        $query_run = mysqli_query($conn, $query1);
        
	
			}
	
			if($query_run){
				$_SESSION['status'] = "Event Info Added!";
				$_SESSION['text'] = "A new event info is added successfully to bulletin!";
				$_SESSION['status_code'] = "success";
				header('location:../../bulletin.php');
				exit();
			}
	
		}


// Update

if(isset($_POST['updateEventEdit'])){

    $id = $_POST['updateEventEdit'];
           
        $eventImage = $_FILES['eventImageEdit']['name'];
        $authorImage = $_FILES['authorImageEdit']['name'];

        $old_image = "SELECT * FROM bulletin_events WHERE be_id  = '$id'";
        $query_run =  mysqli_query($conn, $old_image);
        
        foreach($query_run as $row){
            if($eventImage == null && !$authorImage == null){
        
                $eventImageFinal = $row["be_image"];
                $filename_tmp_event = $row["be_image"]['tmp_name'];

                $authorImageFinal = $authorImage;
                $filename_tmp_author = $_FILES['authorImageEdit']['tmp_name'];
        
            }elseif(!$eventImage == null && $authorImage == null){
        
                $eventImageFinal = $eventImage;
                $filename_tmp_event = $_FILES['eventImageEdit']['tmp_name'];

                $authorImageFinal = $row["be_author_image"];
                $filename_tmp_author = $row["be_author_image"]['tmp_name'];
        
            }elseif($eventImage == null && $authorImage == null){

                $eventImageFinal = $row["be_image"];
                $filename_tmp_event = $row["be_image"]['tmp_name'];

                $authorImageFinal = $row["be_author_image"];
                $filename_tmp_author = $row["be_author_image"]['tmp_name'];

            }else{
                $event_img_path = "../../images/Bulletin-Events/".$row["be_image"];
                $author_img_path = "../../images/Bulletin-Events/".$row["be_author_image"];

                if($event_img_path && $author_img_path){
                    unlink($event_img_path);
                    unlink($author_img_path);
        
                    $eventImageFinal = $eventImage;
                    $filename_tmp_event = $_FILES['eventImageEdit']['tmp_name'];
        
                    $authorImageFinal = $authorImage;
                    $filename_tmp_author = $_FILES['authorImageEdit']['tmp_name'];
                }

            }
            move_uploaded_file($filename_tmp_event, "../../images/Bulletin-Events/" . $eventImageFinal);
            move_uploaded_file($filename_tmp_author, "../../images/Bulletin-Events/" . $authorImageFinal);
        }


            $sql = "UPDATE bulletin_events SET be_id = '$id', be_image = '" . $eventImageFinal . "', be_title = '" . $_POST['titleEdit'] . "', be_date = '" . $_POST['dateEdit'] . "', be_time = '" . $_POST['timeEdit'] . "', be_about = '" . $_POST['aboutEventEdit'] . "', be_author = '" . $_POST['authorEdit'] . "', be_about_author = '" . $_POST['aboutAuthorEdit'] . "', be_author_image = '" . $authorImageFinal . "' WHERE be_id = '$id'";
            $query_run2 = mysqli_query($conn, $sql);
    
			if($query_run2){
				$_SESSION['status'] = "Event Info Updated!";
				$_SESSION['text'] = "An event info is updated successfully from bulletin!";
				$_SESSION['status_code'] = "success";
				header('location:../../bulletin.php');
				exit();
			}
    
        }


        // Delete

        if(isset($_POST['deleteEvent'])){
            $id=$_POST['deleteEvent'];
        
            $old_image = "SELECT * FROM bulletin_events WHERE be_id = '$id'";
            $del_run =  mysqli_query($conn, $old_image);
                
            foreach($del_run as $row){
                $event_img_path = "../../images/Bulletin-Events/".$row["be_image"]; 
                unlink($event_img_path);
                $author_img_path = "../../images/Bulletin-Events/".$row["be_author_image"]; 
                unlink($author_img_path);
            }
        
            $stmt = "DELETE FROM bulletin_events WHERE be_id = '$id'";
            $query_run = mysqli_query($conn, $stmt);
        
            if($query_run)
            {
                $_SESSION['status'] = "Success!";
                $_SESSION['text'] = "The event info is deleted successfully from bulletin!";
                $_SESSION['status_code'] = "success";
                header('location:../../bulletin.php');
                exit();
            }
        }

	
?>