<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Function: Return values</title>
	</head>
	<body>
		<?php
			function add($val1, $val2) {
				$sum = $val1 + $val2;
				return $sum;
			}

			echo add(3, 4);
		?>
		<br />
		<?php 

			function chinese_zodiac($year) {
				switch (($year - 4) % 12) {
					case  0: return "Rat";	
					case  1: return "Ox";	
					case  2: return "Tiger";	
					case  3: return "Rabbit";
					case  4: return "Dragon";
					case  5: return "Snake";	
					case  6: return "Horse";	
					case  7: return "Goat";	
					case  8: return "Monkey";
					case  9: return "Rooster";
					case 10: return "Dog";	
					case 11: return "Pig";	
											
				}
			}

			$year = 2027;
			$zodiac = chinese_zodiac($year);
			echo "{$year} is a year of ".chinese_zodiac($year).".<br />";
		?>

	</body>
</html>