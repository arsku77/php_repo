<?php
	# This is how you redirect to a new page
	function redirect_to($location) {
		header("Location: {$location}");
		exit;
	}

	$logged_in = $_GET['logged_in'];
	if ($logged_in == "1") {
		redirect_to("basic.html");
	} else {
		redirect_to("http://www.lynda.com");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
	</head>
	<body>
		<?php
			
		?>
	</body>
</html>