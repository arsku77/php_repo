<!DOCTYPE html>
<html lang="en">
	<head>
		<title>First page</title>
	</head>
	<body>
		<?php $link_name = "Second page"; ?>
		<?php $id = 5; ?>
		<a href="second_page.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a>
	</body>
</html>