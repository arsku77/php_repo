<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Constants</title>
	</head>
	<body>
		<?php 
			$max_width = 980;
			define("MAX_WIDTH", 980, true);
			echo MAX_WIDTH;
		?>
		<br />
		<?php # can't change value
			# MAX_WIDTH += 3;
			# echo MAX_WIDTH;
		?>
		<?php # can't redefine constant
			# define("MAX_WIDTH", 78);
			# echo MAX_WIDTH;
		?>
		<?php 
			if (define("max_width", 77)) {
				echo "Successful ".max_width;				
			} else {
				echo "Error";
			}
			
		?>
		
	</body>
</html>