<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Function: Multiple Returns</title>
	</head>
	<body>
		<?php
			function add_subt($val1, $val2){
				$add = $val1 + $val2;
				$subt = $val1 - $val2;
				# return array("add" => $add, "subt" => $subt);
				return array($add, $subt);

			}

			$result = add_subt(11, 7);
			echo "Add: ".$result[0]."<br />";
			echo "Subt: ".$result[1]."<br />";

			list($add_res, $subt_res) = add_subt(25, 15);
			echo "Add: ".$add_res."<br />";
			echo "Subt: ".$subt_res."<br />";
		?>
	</body>
</html>