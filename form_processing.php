<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Form Progessing</title>
	</head>
	<body>
		<pre>
			<?php
				print_r($_POST);
			?>
		</pre>
		<br />
		<?php
			$username = $_POST['username'];
			$password = $_POST['password'];

			echo "{$username}: {$password}<br />";
		?>
	</body>
</html>