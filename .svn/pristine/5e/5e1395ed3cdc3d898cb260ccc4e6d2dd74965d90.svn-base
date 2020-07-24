<?php 
	include_once '_header.php';

	//reject unauthorised access
	if($_SESSION['user_position']!="Admin"){
		header("Location: index.php?login=unauthorised");
		exit();
	}
	//connect data base
	include_once 'includes/database_connection.inc.php'; 

	//set current admin editing user id
	if(!isset($_SESSION['admin_edit_uid'])){
		$_SESSION['admin_edit_uid'] = $_POST['edit_id'];
	}
	else{
		if(isset($_POST['edit_id'])){
			if($_SESSION['admin_edit_uid'] != $_POST['edit_id']){
				$_SESSION['admin_edit_uid'] = $_POST['edit_id'];
			}
		}
	}
	$edit_user_id = $_SESSION['admin_edit_uid'];
	$sql = "SELECT * FROM users WHERE id = '$edit_user_id'";
	$edit_user =   mysqli_fetch_assoc(mysqli_query($connection, $sql));
	
 ?>

 <a href="admin_manage_employees.php">Back</a>

 <h4 align=center>Edit your employees information here</h4>

 <form align=center action="includes/admin_edit_name.inc.php" method="POST">
	Name: <input type="text" name="name" value=<?php echo $edit_user['name']; ?>>
	<button type="submit" name="user_id" value=<?php echo $edit_user_id ?>>Update</button>
</form>
<br>
 <form align=center action="includes/admin_edit_password.inc.php" method="POST">
	Password: <input type="text" name="password" value=<?php echo $edit_user['password']; ?>>
	<button type="submit" name="user_id" value=<?php echo $edit_user_id ?>>Update</button>
</form>
<br>
<form align=center action="includes/admin_edit_age.inc.php" method="POST">
	Age: <input type="text" name="age" value=<?php echo $edit_user['age']; ?>>
	<button type="submit" name="user_id" value=<?php echo $edit_user_id ?>>Update</button>
</form>

<br>
 <form align=center action="includes/admin_edit_sex.inc.php" method="POST">
	Sex: <input type="text" name="sex" value=<?php echo $edit_user['sex']; ?>>
	<button type="submit" name="user_id" value=<?php echo $edit_user_id ?>>Update</button>
</form>
<br>
 <form align=center action="includes/admin_edit_email.inc.php" method="POST">
	Email: <input type="text" name="email" value=<?php echo $edit_user['email']; ?>>
	<button type="submit" name="user_id" value=<?php echo $edit_user_id ?>>Update</button>
</form>
<br>
 <form align=center action="includes/admin_edit_phone_num.inc.php" method="POST">
	Phone number: <input type="text" name="phone_number" value=<?php echo $edit_user['phone_number']; ?>>
	<button type="submit" name="user_id" value=<?php echo $edit_user_id ?>>Update</button>
</form>
<br>
 <form align=center action="includes/admin_edit_position.inc.php" method="POST">
	Position: <input type="text" name="position" value=<?php echo $edit_user['position']; ?>>
	<button type="submit" name="user_id" value=<?php echo $edit_user_id ?>>Update</button>
</form>
<br>
<br>