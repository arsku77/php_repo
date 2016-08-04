<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Validation Errors</title>
	</head>
	<body>
		<?php
			$errors = array();

			# * presence
			$value = '0';
			if (!isset($value) || empty($value)) {
				$errors["value"] = "Value can't be blank";
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
			$value = "nobody@nowhere.com";
			if (!preg_match("/@/", $value)) {
				echo "Validation failed.<br />";								
			}

			if (strpos($value, "@") === false) {
				echo "Validation failed.<br />";			
			}


		?>
		
		<?php
		/*	if (!empty($errors)) {
				# redirect_to("first_page.php");
				include("form.php");
			} else {
				include("success.php");
			} 
		*/
			function form_errors($errors_array = array()) {
				$output = "";
				if (!empty($errors_array)) {
					$output .= "<div class=\"errors\">";
					$output .= "Please fix the following errors:";
					$output .= "<ul>";
					foreach ($errors_array as $key => $error) {
						$output .= "<li>".$error."</li>";
					}

					$output .= "</ul>";
					$output .= "</div>";
				}

				return $output;
			}

			echo form_errors($errors);

		?>
	</body>
</html>