<?php  

	if(isset($_POST['username'])) {
		echo "Username is populated";
		echo "<br>";
	}

	if(isset($_POST['password'])) {
		echo "Password is poulated";
		echo "<br>";
	}

	if(isset($_POST['submit'])) {
		echo "Submit button was pressed";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Submission</title>
</head>
<body>
	
<form action="form_submission.php" method="post">
	
	<input type="text" name="username" placeholder="Username">
	<input type="password" name="password" placeholder="Password"><br>
	<input type="submit" name="submit">

</form>




	
</body>    
</html>