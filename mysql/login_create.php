<?php

	include "db.php";
	include "functions.php";
	include "html/header.php";

	generateHeader("Create");

	if(isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		createUser($username, $password);

	}

?>

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