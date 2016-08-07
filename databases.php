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
<?php
	# 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM subjects ";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASC";
	$result = mysqli_query($connection, $query);
	# Test if there was a query error
	if (!$result) {
		die("Database query failed.");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>
		<pre>
		<?php
			# 3. Use returned data (any)
			while ($row = mysqli_fetch_row($result)) {
				# output data from each row
				var_dump($row);
				echo "<br />";
			}
		?>
		<?php
			# 4. Release returned data
			mysqli_free_result($result);
		?>
		</pre>
	</body>
</html>

<?php
	# 5. Close database connection
	mysqli_close($connection);
?>