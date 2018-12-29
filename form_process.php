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