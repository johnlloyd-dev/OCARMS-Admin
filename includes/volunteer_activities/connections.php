<?php
	include('../connect.php');
	session_start();

    // Add
 if(isset($_POST['title'])){

		$imgData =addslashes(file_get_contents($_FILES['coverImage']['tmp_name']));
		$imageProperties = getimageSize($_FILES['coverImage']['tmp_name']);
		
		$query = "INSERT INTO volunteer_event(ve_name,ve_date,ve_time,ve_location,ve_vol_pos,ve_pnt_to_note,ve_skills_required,ve_suitable_volunteer,ve_about_event,ve_image,ve_image_type,ve_target_nov) VALUES ('" . $_POST['title'] . "', '" . $_POST['eventDate'] . "', '" . $_POST['eventTime'] . "', '" . $_POST['location'] . "', '" . $_POST['volunteer_position'] . "', '" . $_POST['p_t_n'] . "', '" . $_POST['skills_required'] . "', '" . $_POST['suitableVolunteers'] . "', '" . $_POST['aboutEvent'] . "', '{$imgData}', '{$imageProperties['mime']}', '" . $_POST['noOFVolunteer'] . "')";
				$query_run = mysqli_query($conn, $query);
				
	
			if($query_run){
				$_SESSION['status'] = "Event Added!";
				$_SESSION['text'] = "A new volunteer event is added successfully!";
				$_SESSION['status_code'] = "success";
				header('location:../../volunteer_activities.php');
				exit();
			}else{
				$_SESSION['status'] = "Unsuccessful!";
				$_SESSION['text'] = "Unknown Error Occured!";
				$_SESSION['status_code'] = "error";
				header('location:../../volunteer_activities.php');
				exit();
			}
	
		}

            // Update
			if(isset($_POST['updateEvent'])){

				$id = $_POST['updateEvent'];


					$ve_name = $_POST['titleEdit']; 
					$ve_date = $_POST['eventDateEdit']; 
					$ve_time = $_POST['eventTimeEdit']; 
					$ve_location = $_POST['locationEdit']; 
					$ve_suitable_volunteer = $_POST['suitableVolunteersEdit']; 
					$ve_about_event = $_POST['aboutEventEdit']; 
					$ve_target_nov = $_POST['noOFVolunteerEdit'];

					$ve_vol_pos = $_POST['vp_edit']; 
					$ve_pnt_to_note = $_POST['ptn_edit']; 
					$ve_skills_required = $_POST['sr_edit']; 


					if(isset($_FILES['imageEdit'])){
						$imgData = addslashes(file_get_contents($_FILES['imageEdit']['tmp_name']));
						$imageProperties = getimageSize($_FILES['imageEdit']['tmp_name']);
			
						$sql = "UPDATE volunteer_event SET ve_id = '$id', ve_name = '$ve_name', ve_date = '$ve_date', ve_time = '$ve_time', ve_location = '$ve_location', ve_vol_pos = '$ve_vol_pos', ve_pnt_to_note = '$ve_pnt_to_note', ve_skills_required = '$ve_skills_required', ve_suitable_volunteer = '$ve_suitable_volunteer', ve_about_event = '$ve_about_event', ve_target_nov = '$ve_target_nov', ve_image = $imgData', ve_image_type = '{$imageProperties['mime']}' WHERE ve_id = '$id'";
			
					}else{
						$sql = "UPDATE volunteer_event SET ve_id = '$id', ve_name = '$ve_name', ve_date = '$ve_date', ve_time = '$ve_time', ve_location = '$ve_location', ve_vol_pos = '$ve_vol_pos', ve_pnt_to_note = '$ve_pnt_to_note', ve_skills_required = '$ve_skills_required', ve_suitable_volunteer = '$ve_suitable_volunteer', ve_about_event = '$ve_about_event', ve_target_nov = '$ve_target_nov' WHERE ve_id = '$id'";
					}
			

					$query_run = mysqli_query($conn, $sql);
		
					if($query_run){
						$_SESSION['status'] = "Event Updated!";
						$_SESSION['text'] = "An event is updated successfully!";
						$_SESSION['status_code'] = "success";
						header('location:../../volunteer_activities.php');
						exit();
					}else{
						$_SESSION['status'] = "Unsuccessful!";
						$_SESSION['text'] = "Unknown Error Occured!";
						$_SESSION['status_code'] = "error";
						header('location:../../volunteer_activities.php');
						exit();
					}
				
				}
        
        // Delete

        if(isset($_POST['deleteEvent'])){
            $did=$_POST['deleteEvent'];
        
            $old_image = "SELECT * FROM volunteer_event WHERE ve_id  = '$did'";
                            $del_run =  mysqli_query($conn, $old_image);
        
            $stmt = "DELETE FROM volunteer_event WHERE ve_id='$did'";
            $query_run = mysqli_query($conn, $stmt);
        
            if($query_run)
            {
				foreach($del_run as $row){
					$dh_img_path = "../../images/Volunteer-Events/".$row["ve_image"]; 
					unlink($dh_img_path);
				}
                $_SESSION['status'] = "Event Deleted!";
                $_SESSION['text'] = "An event is deleted successfully!";
                $_SESSION['status_code'] = "success";
                header('location:../../volunteer_activities.php');
                exit();
            }else{
				$_SESSION['status'] = "Warning!";
				$_SESSION['text'] = "You cannot remove an event that is currently active!";
				$_SESSION['status_code'] = "warning";
				header('location:../../volunteer_activities.php');
				exit();
			
			}
        }

	
?>