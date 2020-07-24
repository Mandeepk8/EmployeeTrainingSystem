<!DOCTYPE html>
<html>
<head>
	<title>User Signing Up</title>
	<a href="index.php">Back</a>
	<p></p>
</head>
<body>
	<form align=center action = "includes/signup.inc.php" method="POST">
		<h4>Create your account here</h4>
		<br>
		<input type="text" name="name" placeholder="Your name">
		<br>
		<br>
		<input type="password" name="password" placeholder="Enter your password">
		<br>
		<br>
		<input type="text" name="age" placeholder="Age">
		<br>
		<br>
		<input type="text" name="sex" placeholder="Gender"> <!-- it might change to selection button later-->
		<br>
		<br>
		<input type="text" name="email" placeholder="Your email address">
		<br>
		<br>
		<input type="text" name="phone_number" placeholder="Phone number">
		<br>
		<br>
		<input type="text" name="position" placeholder="Your position in this company"> <!-- it might change to selection button later-->
		<br>
		<br>
		<button type= "submit" name="signup">Sign up now</button>
	</form>

	<?php 
		if(isset($_GET['signup'])){
			if($_GET['signup'] == "empty"){
				echo "<p align=center>Error: Input cannot be empty</p>";
			}

			else if($_GET['signup'] == "repeat"){
				echo "<p align=center>Error: Already registered email, name, or phone number</p>";
			}

			else if($_GET['signup'] == "invalid"){
				echo "<p align=center>Error: Invalid input!</p>";
			}

			else if($_GET['signup'] == "email"){
				echo "<p align=center>Error: Unexpected email!</p>";
			}


		}


	 ?>
</body>
</html>