<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Comparison and Logical Operators</title>
	</head>
	<body>
		
		<?php
			$a = 4;
			$b = 3;
			$c = 1;
			$d = 20;
			$e = 11;
			if(($a >= $b) || ($c >= $d)) {
				echo "a is larger to b OR ";
				echo "c is larger to d";
			}
		?>
		<br />
		<?php 
			if (!isset($e)) {
				$e = 200;
			}
			echo $e;
		?>
		<br />
		<?php
			// don't reject 0 or 0.0
			$quantity = "";
			if (empty($quantity) && !is_numeric($quantity)) {
				echo "You must enter quantity.";
			}
		?>

	</body>
</html>