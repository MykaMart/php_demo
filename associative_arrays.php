<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php  

$numbers = [1, 2, 3, 5, 6];

// echo $numbers[1] . "<br>"; 

print_r($numbers);
echo "<br>";
$names1 = ["Rosencranz", "Guilenstern"];
$names2 = ["first_name" => "Lucky", "last_name" => "Seven"];

print_r($names1);
echo $names1[0];
echo "<br>";
print_r($names2);
echo $names2["first_name"] . " " . $names2["last_name"];



?>
	
</body>
</html>