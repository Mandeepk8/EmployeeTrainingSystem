<?php 
	include_once 'database_connection.inc.php';

	// get variable value from the input text
	$input_name = $_POST['name'];
	$input_password = $_POST['password'];
	$input_age = $_POST['age'];
	$input_sex = $_POST['sex'];
	$input_email = $_POST['email'];
	$input_phone_number = $_POST['phone_number'];
	$input_position = $_POST['position'];



	//check the repeat email, name or phone nubmer
	$sql = "SELECT * FROM users WHERE email = '$input_email' OR name = '$input_name' OR phone_number = '$input_phone_number'";
	$repeated_users = mysqli_query($connection, $sql);
	$size_repeated_users = mysqli_num_rows($repeated_users);

	if( empty($input_name) || empty($input_password) || empty($input_age) || empty($input_sex) || empty($input_email) || empty($input_phone_number) || empty($input_position) ){
		header("Location: ../signup.php?signup=empty");
		exit();
	}

	else if($size_repeated_users > 0){
		header("Location: ../signup.php?signup=repeat");
		exit();
	}

	else if(!preg_match("/^[a-zA-Z]*$/", $input_name)){
		header("Location: ../signup.php?signup=invalid");
		exit();
	}

	else if(!filter_var($input_email, FILTER_VALIDATE_EMAIL)){
		header("Location: ../signup.php?signup=email");
		exit();
	}
	else if(!is_numeric($input_phone_number)){
		header("Location: ../signup.php?signup=invalid");
		exit();
	}
		//add user to database if all previous information typed in is correct
	else{
		$sql = "INSERT INTO users (name,password,age,sex,email,phone_number,position) VALUES ('$input_name','$input_password','$input_age','$input_sex','$input_email','$input_phone_number','$input_position');";
		mysqli_query($connection,$sql);
		header("Location: ../index.php?signup=success");
		exit();
	}
	

 ?>