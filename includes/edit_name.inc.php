<?php 
	include_once 'database_connection.inc.php';
	session_start();

	// get variable value from the input text
	$update_name = $_POST['name'];
	$temp_id = $_SESSION['user_id'];
	//echo $update_name;

	if(empty($update_name)){
		header("Location: ../edit.php?update=empty");
		exit();
	}

	else{
		if(!preg_match("/^[a-zA-Z]*$/", $update_name)){
			header("Location: ../edit.php?update=invalid");
		}

		else{
			//update user's name to database
			$sql = "UPDATE users SET name = '$update_name' WHERE id = '$temp_id';";
			mysqli_query($connection,$sql);
			$_SESSION['user_name'] = $update_name;
			header("Location: ../edit.php?update=success");
			exit();
		}
	}
 ?>