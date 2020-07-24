<?php 
	session_start();
	if($_SESSION['user_position']!="Admin"){
		header("Location: index.php?login=unauthorised");
		exit();
	}
	include 'database_connection.inc.php';

	$delete_user_id = $_POST['delete'];

	$sql = "DELETE FROM users WHERE id ='$delete_user_id';";
	mysqli_query($connection,$sql);
	header("Location: ../admin_manage_employees.php?delete=success");
	exit();
 ?>