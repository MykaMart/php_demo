<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<?php  

	$list = [635, 726, 43, 383, 78, 52, 694];

	// Maximum value in array
	echo max($list);

	echo "<br>";

	// Minimum value in array
	echo min($list);

	echo "<br>";

	// Print human-readable array values
	print_r ($list);

	echo "<br>";

	// Sort array values
	sort($list);

	print_r ($list);

?>


	
</body>
</html>