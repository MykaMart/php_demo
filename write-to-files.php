<?php  

	$file = "example.txt";

	if($handle = fopen($file, 'w')) {

		// First aguement opened file, second argument what is to be written
		// If data present in file, will be overwritten
		fwrite($handle, "This argument has been written to the file.");

		fclose($handle);

	}else {
		echo "Unable to write to file";
	}


?>