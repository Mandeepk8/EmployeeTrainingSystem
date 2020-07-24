<?php
	include_once '_header.php'; 
 ?>
<a href="personalInfo.php">Back</a>

 
 	

 

<h4 align=center>Change your information here</h4>

<form align=center action="includes/edit_name.inc.php" method="POST">
	<input type="text" name="name" placeholder="Name" >
	<button type="submit" name="submit">Update</button>
</form>

<br>

<!-- <form align=center action="includes/edit_age.inc.php" method="POST">
	<input type="text" name="age" placeholder="Age">
	<button type="submit" name="submit">Update</button>
</form>

<br> -->

<form align=center action="includes/edit_email.inc.php" method="POST">
	<input type="text" name="email" placeholder="Email">
	<button type="submit" name="submit">Update</button>
</form>

<br>

<form align=center action="includes/edit_phone_num.inc.php" method="POST">
	<input type="text" name="phone_number" placeholder="Phone number">
	<button type="submit" name="submit">Update</button>
</form>
