<?php

	include "db.php";


	function readAll() {

		global $connected;
			   $query  = "SELECT * FROM users";
		$result = mysqli_query($connected, $query);

		if (!$result) {
			die("<br> Query Failed");
		}else {
			echo "<br> Update successful";
			return $result;
		}
	}

	function echoAll() {
		$result = readAll();
		while($row = mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			echo "<option value='$id'>$id</option>";
		}
	}

	function createUser($username, $password) {

		global $connected;

		$username = mysqli_real_escape_string($connected, $username);
		$password = mysqli_real_escape_string($connected, $password);

		$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

		$result = mysqli_query($connected, $query);

		if (!$result) {
			die("<br> User Creation Failed");
		}
	}

	function readUsers() {

		global $connected;

		$query = "SELECT * FROM users";

		$result = mysqli_query($connected, $query);

		if (!$result) {
			die("<br> Read Failed");
		}else {

			return $result;

		}
	}

	function updateUser($username, $password, $id) {

		global $connected;

		$username = mysqli_real_escape_string($connected, $username);
		$password = mysqli_real_escape_string($connected, $password);

		$query    = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";

		$result   = mysqli_query($connected, $query);

		if(!$result) {
			die("Update Failed<br>" . mysqli_error($connected));
		}
	}

	function deleteUser($id) {

		global $connected;

		$query    = "DELETE FROM users WHERE id = $id";

		$result   = mysqli_query($connected, $query);

		if(!$result) {
			die("Delete Failed<br>" . mysqli_error($connected));
		}
	}
	

?>