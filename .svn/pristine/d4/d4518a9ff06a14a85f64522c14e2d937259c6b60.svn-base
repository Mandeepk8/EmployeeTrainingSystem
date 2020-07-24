<?php 
	session_start();
	if($_SESSION['user_position']!="Admin"){
		header("Location: index.php?login=unauthorised");
		exit();
	}
	include_once 'database_connection.inc.php';
	$edit_id = $_POST['user_id'];
	$edit_age = $_POST['age'];

	// echo $edit_id;
	// echo "<br>";
	// echo $edit_age;

	if(empty($edit_age)){
		header("Location: ../admin_edit_users.php?update=empty");
		exit();
	}

	else{
		if(!is_numeric($edit_age)){
			header("Location: ../admin_edit_users.php?update=invalid");
			exit();
		}

		else{
			//update user's name to database
			$sql = "UPDATE users SET age = '$edit_age' WHERE id = '$edit_id';";
			mysqli_query($connection,$sql);
			$_SESSION['admin_edit_uid'] = $edit_id;
			header("Location: ../admin_edit_users.php?update=success");
			exit();
		}
	}
 ?>