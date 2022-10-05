<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercise Part 2 - Odd and Even</title>
</head>
<body>
	<?php
	error_reporting(0);
	$text = file("file3.txt");
	$odd = array();
	$even = array();
	$num1 = 0;
	$num2 = 0;

	for($i = 0; $i < count($text); $i++){
		
		if($text[$i] %2 == 0){
			$even[$num1] = $text[$i];
			$num1++;
		} else {
			$odd[$num2] = $text[$i];
			$num2++;
		}
	}

	foreach ($text as $key => $value) {
		echo "element[".$key."] : ". $value. "<br>";
	}

	echo "<br>The Even elements are: <br>";
	for($i = 0; $i <= $num1; $i++){
		echo $even[$i];
	}

	echo "<br>The Odd elements are: <br>";
	for($i = 0; $i <= $num2; $i++){
		echo $odd[$i];
	}
	?>
</body>
</html>