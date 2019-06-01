<?php
	include_once 'dbh-inc.php';

	// Insert data into database
	// Protect my database against SQL injection
	// Don't put real_escape_string in parameter
	// Not the best way to make database safe
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


	$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
	mysqli_query($conn, $sql);

	header("Location: ../index.php?signup=success");