<?php
	# REMEMBER: Setting cookies must be before *any* HTML output
	# 			unless output buffering is turned on.
	$name = "test";
	$value = 45;
	$expire = time() + (7*24*60*60);
	setcookie($name, $value, $expire);	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cookies</title>
	</head>
	<body>
	</body>
</html>