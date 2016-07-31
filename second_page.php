<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Second page</title>
	</head>
	<body>
		<?php
			# print_r($_GET);
			$id = $_GET['id'];
			echo $id;
		?>
		<br />
		<?php
			$company = $_GET['company'];
			echo $company;
		?>		
	</body>
</html>