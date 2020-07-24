<?php 
	include_once '_header.php';

	//reject unauthorised access
	if($_SESSION['user_position']!="Admin"){
		header("Location: index.php?login=unauthorised");
		exit();
	}
	// //connect data base
	// include_once 'includes/database_connection.inc.php'; 

 ?>	
<a href="admin_manage_employees.php">Back</a>
<body>
	
	<form align=center action = "includes/admin_add_users.inc.php" method="POST">
		<h4>Add users here</h4>
		<br>
		<input type="text" name="name" placeholder="User name">
		<br>
		<br>
		<input type="password" name="password" placeholder="Set user password">
		<br>
		<br>
		<input type="text" name="age" placeholder="Age">
		<br>
		<br>
		<input type="text" name="sex" placeholder="Gender"> <!-- it might change to selection button later-->
		<br>
		<br>
		<input type="text" name="email" placeholder="Set user email address">
		<br>
		<br>
		<input type="text" name="phone_number" placeholder="Phone number">
		<br>
		<br>
		<input type="text" name="position" placeholder="User position in this company"> <!-- it might change to selection button later-->
		<br>
		<br>
		<button type= "submit" name="signup">Add</button>
	</form>





</body>