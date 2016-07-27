<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Array Functions</title>
	</head>
	<body>
		<?php $numbers = array(8, 23, 15, 42, 16, 4); ?>

		Count: 		<?php echo count($numbers);	?><br />
		Max value: 	<?php echo max($numbers);	?><br />
		Min value: 	<?php echo min($numbers);	?><br />
		<br />
		<pre>
		Sort: 			<?php sort($numbers); print_r($numbers); 	?><br />
		Reverse sort: 	<?php rsort($numbers); print_r($numbers); 	?><br />
		</pre>
		Implode: 		<?php $str_numbers = implode(" * ", $numbers); echo $str_numbers; ?><br />
		Explode:		<?php print_r(explode(" * ", $str_numbers)); ?><br />
		<br />
		15 in array: 	<?php echo in_array(15, $numbers); // returns True/False?><br />
		19 in array: 	<?php echo in_array(19, $numbers); // returns True/False?><br />
		Serach 15: 		<?php echo array_search(15, $numbers); ?><br />
		Serach 19: 		<?php echo array_search(19, $numbers); ?><br />

	</body>
</html>