<?php  

	if(isset($_POST['submit'])) {

		$users		= [Sara, Dana, Myka];
		
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if(strlen($username) < 4) {

			echo "Username requires 4 or more characters";

		}elseif (!in_array($username, $users)) {

			echo "Invalid Username";

		}else {

			echo "Username: " . $username;
		}

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Validation</title>
</head>
<body>
	
<form action="form_validation.php" method="post">
	
	<input type="text" name="username" placeholder="Username">
	<input type="password" name="password" placeholder="Password"><br>
	<input type="submit" name="submit">

</form>



	
</body>
</html>