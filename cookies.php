<?php  

	$name		= "cookiename";
	$value		= 100;
	$expiration	= time() + (60*60*24*365*2);

	setcookie($name, $value, $expiration);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<?php  

	if(isset($_COOKIE["cookiename"])) {
		
		// $_COOKIE is an associative array off all the cookie, specifying the
		// name of the cookie returns it's value
		$name = $_COOKIE["cookiename"];
		echo $name;

	} else {
		echo "Cookie not found";
	}

?>


	
</body>
</html>