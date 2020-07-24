<!DOCTYPE html>
<html>
<head>
	<title>Employee Training System</title>


	<form align=center >
 		<h2 algin = center>Employee Traning System Login</h1>
 	</form>


	
</head>
<body>
	<form align=center action = "includes/login.inc.php" method="POST">
		<input type="text" name="email" placeholder="Email">
		<br>
		<br>
		<input type="password" name="password" placeholder="Password">
		<br>
		<br>
		<button type="submit" name="login">Log in</button>
	</form>

	<br>

	<form align = center action ="signup.php">
		<button type= "submit" name="tosignup">Haven't got an account? Please Sign up first</button>
	</form>

	<?php
		
		if(isset($_GET['login'])){
			if($_GET['login'] == "incorrect"){
				echo "<p align=center>Error: Invalid email or password!</p>";
			}

			if($_GET['login'] == "unauthorised"){
				echo "<p align=center>Error: You may need to log in first!</p>";
			}

		}

		if(isset($_GET['signup'])){
			if($_GET['signup'] == "success"){
				echo "<p align=center>Sign up sccessfully!</p>";
			}
		}

		if(isset($_GET['logout'])){
			if($_GET['logout'] == "success"){
				echo "<p align=center>Log out sccessfully!</p>";
			}
		}

	 ?>
</body>
</html>