<?php
	include_once '_header.php';
	if($_SESSION['user_position']!="Admin"){
		header("Location: index.php?login=unauthorised");
		exit();
	}
	include_once 'includes/database_connection.inc.php';
 ?>
 <a href="homepage.php">Back</a>
 <br>
 <br>
<body>

	<!-- below are for showing employees information in the form of a table -->
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Password</th>
			<th>Age</th>
			<th>Sex</th>
			<th>Email</th>
			<th>Phone number</th>
			<th>Postion</th>
		</tr>

		<?php 
			$sql = "SELECT * FROM users WHERE position!='Admin';";
			$selected_users = mysqli_query($connection, $sql);
			$size_selected = mysqli_num_rows($selected_users);

			for($i=0;$i<$size_selected;$i++){
				$next_user =  mysqli_fetch_assoc($selected_users);
				echo "<tr><th>".$next_user['id']."</th><th>".$next_user['name']."</th><th>".$next_user['password']."</th><th>".$next_user['age']."</th><th>".$next_user['sex']."</th><th>".$next_user['email']."</th><th>".$next_user['phone_number']."</th><th>".$next_user['position']."</th><th><form action='includes/admin_delete_users.inc.php' method = 'POST'><button name='delete' value=".$next_user['id'].">Delete</button></form></th> <th><form action='admin_edit_users.php' method = 'POST'><button name='edit_id' value=".$next_user['id'].">Edit</button></form></th> </tr>";
				
			}

	 	?>
	</table>
	
	<br>
	<br>
	<form action="admin_add_users.php">
		<button>Add user</button>
	</form>



</body>

