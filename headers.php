<?php
	# ini_set("display_errors", "On");
	# error_reporting(E_ALL);
	header("HTTP 1.1/ 404 Not Found");
	header("X-Powered_by: none of your business");
			
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
	</head>
	<body>
		<?php
			# This won't work... unless you have output
			# buffering turned on.
			# header("HTTP 1.1/ 404 Not Found");
			
		?>
		<pre>
			<?php
				print_r(headers_list());
			?>
		</pre>
	</body>
</html>