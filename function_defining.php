<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Function: Defining</title>
	</head>
	<body>
		<?php
			function say_hello() {
				echo "Hello PHP!<br />";
			}

			say_hello();

			function say_hello_to($to) {
				echo "Hello {$to}!<br />";
			}

			say_hello_to("Python");
			say_hello_to("Everyone");

			function say_hello_loudly() {
				echo strtoupper("Hello Word!<br />");
			}

			# function say_hello_loudly() {
			# 	echo "We can't redefine function.";
			# }

			say_hello_loudly();
		?>
		
	</body>
</html>