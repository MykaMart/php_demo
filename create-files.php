<?php  

	// If file does not already exist fopen will create it
	$file = "example2.txt";

	// First agyment is the file name, second argument is the mode)
	$handle = fopen($file, 'w');

	fclose($handle);

?>