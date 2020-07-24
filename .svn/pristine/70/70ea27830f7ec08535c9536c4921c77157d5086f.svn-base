<?php 
	include_once 'database_connection.inc.php';
	session_start();

	// get variable value from the input text
	$update_phone_number = $_POST['phone_number'];
	$temp_id = $_SESSION['user_id'];
	//echo $update_name;

	if(empty($update_phone_number)){
		header("Location: ../edit.php?update=empty");
		exit();
	}

	else{
		if(!is_numeric($update_phone_number)){
			header("Location: ../edit.php?update=invalid");
			exit();
		}

		else{
			//update user's name to database
			$sql = "UPDATE users SET phone_number = '$update_phone_number' WHERE id = '$temp_id';";
			mysqli_query($connection,$sql);
			$_SESSION['user_phone_number'] = $update_phone_number;
			header("Location: ../edit.php?update=success");
			exit();
		}
	}
 ?>