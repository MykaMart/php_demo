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
	

?>