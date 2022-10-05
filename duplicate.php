<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercise Part 2 - Duplicate</title>
</head>
<body>
	<?php
		$text = file("file.txt");
		foreach ($text as $key => $value) {
			echo "element[" . $key . "]: ". $value . "<br>";
		}

		$rep = 0;
		
		for ($i=0; $i < count($text) ; $i++) { 
			if($text[$i] > 1){
				$rep++;
			}
		}
		echo "<br>Total number of duplicate elements found in the array is :".$rep;

	?>
</body>
</html>