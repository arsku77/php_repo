<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<?php
			# usual array form
			$numbers = array(4, 8, 15, 16, 23, 42);
			echo $numbers[1];
		?>
		<br />
		<?php $mixed = array(7, "fox", "dog", array("x", "y", "z")); ?>
		<?php echo $mixed[2]; ?><br />
		<?php //echo $mixed[3]; ?><br />
		<?php //echo $mixed; ?><br />
		
		<?php echo $mixed[3][1]; ?><br />

		<?php $mixed[2] = "cat"; ?>
		<?php $mixed[4] = "mouse"; ?>
		<?php $mixed[] = "horse"; ?>
		<pre>
		<?php print_r($mixed) ?>
		</pre>

		<?php
			# short array form
			$array = [1, 2, 3];
		?>
	</body>
</html>