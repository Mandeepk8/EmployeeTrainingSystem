<?php 
	session_start();
	if($_SESSION['user_position']!="Admin"){
		header("Location: index.php?login=unauthorised");
		exit();
	}
	include_once 'database_connection.inc.php';
	$edit_id = $_POST['user_id'];
	$edit_name = $_POST['name'];

	// echo $edit_id;
	// echo "<br>";
	// echo $edit_age;

	if(empty($edit_name)){
		header("Location: ../admin_edit_users.php?update=empty");
		exit();
	}

	else{
		if(!preg_match("/^[a-zA-Z]*$/", $edit_name)){
			header("Location: ../admin_edit_users.php?update=invalid");
			exit();
		}

		else{
			//update user's name to database
			$sql = "UPDATE users SET name = '$edit_name' WHERE id = '$edit_id';";
			mysqli_query($connection,$sql);
			$_SESSION['admin_edit_uid'] = $edit_id;
			header("Location: ../admin_edit_users.php?update=success");
			exit();
		}
	}
 ?>