<html>
<head>
	<title>Information Gathered</title>
</head>
<body>
	<?php
		// Single line comment
		// Single line comment
		/*
			Multi line
			comment
		*/

		/*
			- Prefix $
			- Start with a letter or an underscore
			- Only letters, numbers and underscores
			- Case sensitive
		*/

		$output = 'Hello World!';
		
		$num1 = 4;
		$num2 = 10;
		$sum = $num1 + $num2;

		$string1 = 'Hello';
		$string2 = 'World';
		$greeting1 = $string1 . ' ' . $string2 . '!';
		// Use . instead of +
		$greeting2 = "$string1 $string2";

		define('GREETING', 'Hello Everyone');
		// CONSTANT

		echo GREETING;

	?>
</body>
</html>