<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<?php  

	function addNumbers($number1, $number2) {

		$sum = $number1 + $number2;
		return $sum;

	}

	$result = addNumbers(36, 64);

	echo $result . "<br>";

	$result = addNumbers(100, $result);

	echo $result;

?>


	
</body>
</html>