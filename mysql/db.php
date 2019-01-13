<?php 

	$connected = mysqli_connect('localhost', 'root', 'root', 'loginapp');

	if(!$connected) {
		die("Database connection error");
	}

?>