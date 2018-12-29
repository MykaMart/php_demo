<?php  

	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		echo "Username = " . $username . "<br> Password = " . $password;

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Data</title>
</head>
<body>
	
<form action="form_data.php" method="post">
	
	<input type="text" name="username" placeholder="Username">
	<input type="password" name="password" placeholder="Password"><br>
	<input type="submit" name="submit">

</form>




	
</body>    
</html>