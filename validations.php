<!DOCTYPE html>
<html lang="en">
	<head>
		<title>untitled</title>
	</head>
	<body>
		<?php
			# * presence
			$value = 'z';
			if (!isset($value) || empty($value)) {
				echo "Validation failed.<br />";
			}	

			# * string length	
			# min length
			$value = "qwerty";
			$min = 3;
			if (strlen($value) < $min) {
				echo "Validation failed.<br />";				
			}
			# max length
			$max = 8;
			if (strlen($value) > $max) {
				echo "Validation failed.<br />";								
			}

			# * type
			$value = "123";
			if (!is_string($value)) {
				echo "Validation failed.<br />";								
			}

			# * inclusion in a set
			$value = "3";
			$set = array("1", "2", "3", "4");
			if (!in_array($value, $set)) {
				echo "Validation failed.<br />";								
			}

			# * uniqueness
			# use a database to check uniqeness

			# * format
			# use a regexp on a string
			# preg_match($regexp, $subject);
			if (preg_match("/PHP/", "PHP is fun.")) {
				echo "A match was found.<br />";
			} else {
				echo "A matcho was not found.<br />";
			}

			$value = "nobody@nowhere.com";
			if (!preg_match("/@/", $value)) {
				echo "Validation failed.<br />";								
			}

			if (strpos($value, "@") === false) {
				echo "Validation failed.<br />";			
			}

		?>
	</body>
</html>