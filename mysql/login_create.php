<?php

	if(isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		$connected = mysqli_connect('localhost', 'root', 'root', 'loginapp' );

		if($connected) {
			echo "Database connected";
		}else {
			die("Database connection error");
		}

		$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

		$result = mysqli_query($connected, $query);

		if (!$result) {
			die("<br> Query Failed");
		}else {
			echo "<br>Insertion successful";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	

<div class="container">
	
	<div class="col-sm-6">
		<form action="login_create.php" method="POST">
			<div class="form-group">
				<label for="username" class="">Username</label>
				<input type="username" name="username" class="form-control">
				<label for="password" class="">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
		</form>
	</div>

</div>


	
</body>
</html>