<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Loops: while</title>
	</head>
	<body>
		<?php
			$count = 0;
			while ($count <= 10) {
				if ($count == 5) {
					echo "FIVE, ";
				} else {
					echo $count.", ";
				}
				
				$count++;				
			}
			echo "<br />";
			echo "Count: {$count}<br />";
		?>
	</body>
</html>