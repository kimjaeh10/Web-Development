<?php
	include_once 'includes/dbh-inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$data = "Admin";

	//Created a template
	$sql = "SELECT * FROM users WHERE user_uid=?;";

	//Create a prepared statement
	$stmt = mysqli_stmt_init($conn);

	//Prepare the prepared ststement
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "SQL statement failed";
	}
	else {
		//Bind parameters to the placeholder
		mysqli_stmt_bind_param($stmt, "s", $data);

		//Run parameters inside database
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);

		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_uid'] . "<br>";
		}
	}


	/*
	// Show database data on a website using MySQLi
	$sql = "SELECT * FROM users;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_uid'] . "<br>";
		}
	}
	else {
		echo "Not found";
	}
	*/
?>
</body>
</html>