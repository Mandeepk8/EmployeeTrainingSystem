<?php 
	session_start();
	if(!isset($_SESSION['user_id'])){
		header("Location: index.php?login=unauthorised");
		exit();
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
	
 	
 		<a href="homepage.php">Employee Training System</a>
 	</form>

 	<form action="includes/logout.inc.php" align=right method="POST">
 		<?php echo "Hi ".$_SESSION['user_name']."<br>"; ?>
 		<button type="submit" name="logout" value="1">Log out</button>
 	</form>
 	
 	<br>
 	<HR>

 </head>
 <body>
 </body>
 </html>
