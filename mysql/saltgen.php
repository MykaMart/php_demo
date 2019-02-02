<?php  

	function saltGen() {
		$chars 			= "abcdefghijklmnopqrstuvwxyz1234567890!@#$%^&*()";
		$charsArray 	= str_split($chars);
		$arrayLen		= sizeof($charsArray) - 1;
		$salt           = "";

		for($saltChar = 0; $saltChar <= 32; $saltChar++) {
			$index 	  = rand(0, $arrayLen);
			$randChar = $charsArray[$index];
			$salt = $salt . $randChar;
		}

		return $salt;

	}
	
?>