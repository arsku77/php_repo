<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Form Progessing</title>
	</head>
	<body>
		<pre>
			<?php
				ini_set('display_errors', 'On');
				error_reporting(E_ALL);	

				print_r($_POST);
			?>
		</pre>
		<br />
		<?php
			if (isset($_POST['submit'])) {

				# set default values
				if (isset($_POST['username'])) {
					$username = $_POST['username'];
				} else {
					$username = "";
				}
				if (isset($_POST['password'])) {
					$password = $_POST['password'];				
				} else {
					$password = "";
				}

				# set default values using ternary operator
				$username = isset($_POST['username']) ? $_POST['username'] : "";
				$password = isset($_POST['password']) ? $_POST['password'] : "";

			} else {
				$username = "";
				$password = "";				
			}

		?>

		<?php
			echo "{$username}: {$password}<br />";
		?>
		
	</body>
</html>