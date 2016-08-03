<?php
	ini_set("display_errors", "On");
	error_reporting(E_ALL);

	require_once("included_function.php");

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == "rusak" && $password == "secret") {
			# successful login
			redirect_to("basic.html");
		} else {
			$message = "There are some errors.";			
		}

	} else {
		$username = "";
		$message = "Please log in.";
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>untitled</title>
	</head>
	<body>
		<?php
			echo "{$message}<br />";
		?>
		<form action="form_single.php" method="post">
			Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br />
			Password: <input type="password" name="password" value="" /><br />
			<br />
			<input type="submit" name="submit" value="Submit" />
		</form>

	</body>
</html>