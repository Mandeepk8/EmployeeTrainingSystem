<?php 
	session_start();
	if($_SESSION['user_position']!="Admin"){
		header("Location: index.php?login=unauthorised");
		exit();
	}
	include_once 'database_connection.inc.php';
	$edit_id = $_POST['user_id'];
	$edit_sex = $_POST['sex'];

	// echo $edit_id;
	// echo "<br>";
	// echo $edit_password;

	if(empty($edit_sex)){
		header("Location: ../admin_edit_users.php?update=empty");
		exit();
	}

	else{
		//currently there is no format requirement for sex

		
		//update user's name to database
		$sql = "UPDATE users SET sex = '$edit_sex' WHERE id = '$edit_id';";
		mysqli_query($connection,$sql);
		$_SESSION['admin_edit_uid'] = $edit_id;
		header("Location: ../admin_edit_users.php?update=success");
		exit();
		
	}
 ?>