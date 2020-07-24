<?php 
	include_once 'database_connection.inc.php';
	session_start();

	// get variable value from the input text
	$update_email = $_POST['email'];
	$temp_id = $_SESSION['user_id'];
	//echo $update_name;

	// check whether input is empty
	if(empty($update_email)){
		header("Location: ../edit.php?update=empty");
		exit();
	}

	else{
		// check format
		if(!filter_var($update_email, FILTER_VALIDATE_EMAIL)){
			header("Location: ../edit.php?update=email");
		}

		//check it is existed in database
		else{
			$sql = "SELECT * FROM users WHERE email='$update_email';";
			$repeated_users = mysqli_query($connection, $sql);
			$size_repeated_users = mysqli_num_rows($repeated_users);
			
			if($size_repeated_users > 0){
				header("Location: ../edit.php?update=repeat");
				exit();
			}

			//update user's email to database
			else{
			
				$sql = "UPDATE users SET email = '$update_email' WHERE id = '$temp_id';";
				mysqli_query($connection,$sql);
				$_SESSION['user_email'] = $update_email;
				header("Location: ../edit.php?update=success");
				exit();
			}
		}
		
	}
 ?>