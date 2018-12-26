<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<?php  

function greeting($message) {
	
	echo $message . "<br>";

}

function calculate($number1, $number2) {

	$sum = $number1 + $number2;
	echo $sum;
}

greeting("Hello User");
calculate(3, 4);

?>


	
</body>
</html>