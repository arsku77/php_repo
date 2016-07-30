<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Functions: Defaults</title>
	</head>
	<body>
		<?php
			function paint($room = "office", $color = "white") {
				return "The color of the {$room} is {$color}.<br />";
			}

			echo paint();
			echo paint("bedroom", "blue");
			echo paint(null, "red");
		?>
	</body>
</html>