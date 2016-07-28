<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Loop: foreach</title>
	</head>
	<body>
		<?php
			$ages = array(4, 8, 15, 16, 23, 42);

			foreach ($ages as $age) {
				echo "Age: {$age}<br />";
			}
		?>
		<br />
		<?php
			$person = array(
				"first_name" 	=> "Roman",
				"last_name" 	=> "Lavrinenko",
				"address" 		=> "Russia, St.Petersburg",
				"zip_code" 		=> "55148798",
				"spec" 			=> "programmer");

			foreach ($person as $attr => $value) {
				$attr_nice = ucfirst(str_replace("_", " ", $attr));
				$value_nice = ucwords(trim($value));
				echo "{$attr_nice}: {$value_nice}<br />";
			}

		?>
		
	</body>
</html>