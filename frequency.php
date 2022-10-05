<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercise Part 2 - Frequency</title>
</head>
<body>
	<?php
	/*$text = file("file2.txt");
	$freq = array_count_values($text);

	while(list($value, $num) = each($freq)) {
		echo ($value . "occurs" . $num . "time/s<br>" );
	}*/
	/*$text = file("file2.txt");
	$fr = array_fill(0, count($text), 0);
	$check = -1;
	for( $i = 0; $i < count($fr); $i++)
{
if($fr[$i] != $check)
{
echo( $text[$i] ." occurs " );
echo( $fr[$i]." times.");
echo(" ");
}
}
return 0;*/
	
	$text = file("file2.txt");
	$freq = array_count_values($text);
	arsort($freq);

	foreach ($text as $key => $value) {
		echo "element[".$key."]: ". $value. "<br>";
	}
	echo "<br>";
	foreach ($freq as $key => $value) {
		echo $key." occurs " . $value . " times.<br>";
		
	}
	
	?>
</body>
</html>