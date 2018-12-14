<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables</title>
</head>
<body>
	

<?php  

// In Wordpress the naming convention for variables encourages underscore vs camelcase
// Variables cannot start with a number

// String
$name = 'Myka';

// Number
$number = 100;

// Floating Number
$floating_number = 100.5;

//Markup (Must be enclosed in double quotes)
$html = "<h1> HELLO </h1>";

//Concatonate variables with '.'
echo $name . ' ' . $number . ' ' . $floating_number;

echo $html;
?>


	
</body>
</html>