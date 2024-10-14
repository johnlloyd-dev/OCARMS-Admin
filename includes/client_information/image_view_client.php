<?php
    require_once "../connect.php";
    if(isset($_GET['client_id'])) {
        $sql = "SELECT image_type, client_image FROM client_information WHERE client_id = " . $_GET['client_id'];
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		header("Content-type: ".$row['image_type']);
        echo $row["client_image"];
	}
	mysqli_close($conn);
?>