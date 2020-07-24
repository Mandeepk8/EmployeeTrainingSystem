<?php 

	include_once 'database_connection.inc.php';	//used to connect ets database
	session_start();	

	$input_email = $_POST['email'];
	$input_password = $_POST['password'];
	
	$sql = "SELECT * FROM users WHERE email = '$input_email' AND password = '$input_password'";
	$result = mysqli_query($connection, $sql);
	$result_size = mysqli_num_rows($result);
	
	



	if($result_size!= 1){
		header("Location: ../index.php?login=incorrect");
		exit();
	}

	else{
		$LoggedInUser = mysqli_fetch_assoc($result);
		$_SESSION['user_id'] = $LoggedInUser['id'];
		$_SESSION['user_name'] = $LoggedInUser['name'];
		$_SESSION['user_age'] = $LoggedInUser['age'];
		$_SESSION['user_sex'] = $LoggedInUser['sex'];
		$_SESSION['user_email'] = $LoggedInUser['email'];
		$_SESSION['user_phone_number'] = $LoggedInUser['phone_number'];
		$_SESSION['user_position'] = $LoggedInUser['position'];

		header("Location: ../homepage.php?login=success");
		exit();
	}

 ?>