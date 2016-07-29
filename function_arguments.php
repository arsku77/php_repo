<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Function: Arguments</title>
	</head>
	<body>
		<?php

			function say_hello_to($word) {
				echo "Hello {$word}!<br />";
			}

			$name = "John";
			say_hello_to($name);

		?>

		<?php

			function better_hello($greeting, $target, $punct) {
				echo $greeting." ".$target." ".$punct."<br />";
			}

			better_hello("Welcome", $name, "!!!");
			better_hello("Welcome", $name, null);

		?>
		
	</body>
</html>