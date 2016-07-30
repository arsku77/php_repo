<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ERROR: Reporting and Level</title>
	</head>
	<body>
		<?php
			# Turn ON error reporting
			# 1. In php.ini file (/etc/php5/apache2/php.ini)
			# 	- display_errors = On
			#	- error_reporting = E_ALL
			# 2. In PHP code
			#	- ini_set('display_errors','On');
			# 	- error_reporting(E_ALL);
			# error_reporting(E_ALL & ~E_DEPRECATED); - include old code errors
			# error_reporting(); - show error current level (by error code)
			#
			# http://php.net/manual/en/errorfunc.constants.php
			# HERE ERROR CODE DESCRIPTIONS
			echo error_reporting()."<br />";

			ini_set('display_errors', 'On');
			error_reporting(E_ALL);
			echo error_reporting()."<br />";

			echo 5 / 0;
		?>
	</body>
</html>