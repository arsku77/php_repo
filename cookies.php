<?php
	# REMEMBER: Setting cookies must be before *any* HTML output
	# 			unless output buffering is turned on.
	$name = "test";
	$value = "Python";
	$expire = time() + (7*24*60*60);
	setcookie($name, $value, $expire);	

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cookies</title>
	</head>
	<body>
	<!--pre-->
		<?php
			$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "no cookies";
			echo $test;
		?>
	<!--/pre-->

	</body>
</html>