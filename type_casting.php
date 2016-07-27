<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Type Juggling and Type Casting</title>
	</head>
	<body>
		Type Juggling<br />
		<?php $count = "2 cats";	?>
		Type: <?php echo gettype($count); ?><br />
		
		<?php $count +=  3; ?>
		Type: <?php echo gettype($count); ?><br />

		<?php $cats = "I have ".$count." cats."; ?>
		Cats: <?php echo gettype($cats); ?><br />
		<br />

		Type Casting<br />
		<?php settype($count, "integer"); # rewrite variable type ?>
		count: <?php echo gettype($count); ?><br />

		<?php $count2 = (string) $count; # don't rewrite type for $count ?>
		count: <?php echo gettype($count); ?><br />
		count2: <?php echo gettype($count2); ?><br />


	</body>
</html>