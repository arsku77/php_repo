<?php
	require_once("error_reporting_file.php");
	# 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "secretpassword";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	# Test is connection occured
	if (mysqli_connect_errno()) {
		die("Database connection failed: ".
			mysqli_connect_error().
			" (".mysqli_connect_errno().")");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>untitled</title>
	</head>
	<body>
		<?php
				
		?>
	</body>
</html>

<?php
	# 5. Close database connection
	mysqli_close($connection);
?>