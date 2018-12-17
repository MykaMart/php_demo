<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<?php  

$number_list_current = [0, 1, 2, 3, 4, 5, "6", "<h1>Hello</h1>" ];

// No longer standard, but may encounter
$number_list_older = array(0, 1, 2, 3, 4, 5, "6", "<h1>Hello</h1>");

echo $number_list_current[7];

// Loop over arrays
for($i=0; $i<count($number_list_current); $i++) {
	echo $number_list_current[$i];
}

?>


	
</body>
</html>