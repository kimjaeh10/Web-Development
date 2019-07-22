<?php
	include_once 'includes/dbh-inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="includes/signup-inc.php" method="POST">
		<input type="text" name="first" placeholder="First name">
		<br>
		<input type="text" name="last" placeholder="Last name">
		<br>
		<input type="text" name="email" placeholder="E-mail">
		<br>
		<input type="text" name="uid" placeholder="Username">
		<br>
		<input type="password" name="pwd" placeholder="Password">
		<br>
		<button type="submit" name="submit">Sign up</button>
	</form>


</body>
