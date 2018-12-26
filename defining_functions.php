<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<?php  

	function init() {
		greeting();
		echo "<br>";
		calculate();
	}

	function calculate() {
		echo 456 + 365;
	}

	function greeting(){
		echo "Hello User, how are you today?";
	}

	init();

?>


	
</body>
</html>