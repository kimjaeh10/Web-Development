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
		<?php
			if (isset($_GET['first'])) {
				$first = $_GET['first'];
				echo '<input type="text" name="first" placeholder="First name" value="'.$first.'"> </br>';
			}
			else {
				echo '<input type="text" name="first" placeholder="First name"> </br>';
			}

			if (isset($_GET['last'])) {
				$last = $_GET['last'];
				echo '<input type="text" name="first" placeholder="Last name" value="'.$last.'"> </br>';
			}
			else {
				echo '<input type="text" name="last" placeholder="Last name"> </br>';
			}
		?>
		<input type="text" name="email" placeholder="E-mail"> </br>
		<?php
			if (isset($_GET['uid'])) {
				$uid = $_GET['uid'];
				echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'"> </br>';
			}
			else {
				echo '<input type="text" name="uid" placeholder="Username"> </br>';
			}
		?>
		<input type="password" name="pwd" placeholder="Password"> </br>
		<button type="submit" name="submit">Sign up</button>
	</form>
	<?php
		/*
		$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		if (strpos($fullUrl, "signup=empty") == true) {
			echo "You did not fill in all fields!";
			exit();
		}
		elseif (strpos($fullUrl, "signup=char") == true) {
			echo "You used invalid characters!";
			exit();
		}
		elseif (strpos($fullUrl, "signup=email") == true) {
			echo "You used an invalid email";
			exit();
		}
		elseif (strpos($fullUrl, "signup=success") == true) {
			echo "You have been signed up";
			exit();
		}
		*/

		if (!isset($_GET['signup'])) {
			exit();
		}
		else {
			$signupCheck = $_GET['signup'];

			if ($signupCheck == "empty") {
				echo "You did not fill in all fields!";
				exit();
			}
			elseif ($signupCheck == "char") {
				echo "You used invalid characters!";
				exit();
			}
			elseif ($signupCheck == "email") {
				echo "You used an invalid email";
				exit();
			}
			elseif ($signupCheck == "success") {
				echo "You have been signed up";
				exit();
			}
		}
	?>
</body>
</html>