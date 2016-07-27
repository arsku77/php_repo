<!DOCTYPE html>
<html lang="en">
	<head>
		<title>NULL</title>
	</head>
	<body>
		<?php
			$var1 = null;
			$var2 = "";			
		?>
		var1 is null: <?php echo is_null($var1); ?><br />
		var2 is null: <?php echo is_null($var2); ?><br />
		var3 is null: <?php echo is_null($var3); ?><br />
		<br />
		var1 is set: <?php echo isset($var1); ?><br />
		var2 is set: <?php echo isset($var2); ?><br />
		var3 is set: <?php echo isset($var3); ?><br />
		<br />
		<?php # empty: "", null, 0, 0.0, "0", false, array()?>
		
		<?php $var3 = "0"; ?>
		var1 is empty: <?php echo empty($var1); ?><br />
		var2 is empty: <?php echo empty($var2); ?><br />
		var3 is empty: <?php echo empty($var3); ?><br />
	</body>
</html>