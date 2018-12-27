<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<?php  

	$x = "outside"; // Global scope

	function convert() {

		global $x;
		$x = "inside"; // Local scope

	}

	echo $x . "<br>";

	convert();

	echo $x;
?>


	
</body>
</html>