<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Loop: for</title>
	</head>
	<body>
		<?php
			for ($count = 20; $count > 0; $count--) {
				if ($count % 2 == 0) {
					echo "{$count} is even.<br />";
				} else {
					echo "{$count} is odd.<br />";
				}
			}
		?>
	</body>
</html>