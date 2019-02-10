<?php  

	$file = "example.txt";

	if($handle = fopen($file, 'r')) {

		// First argument is the open file and the second is the number of bytes to read
		
			// $content 	= fread($handle, 10);
		
		// Filesize returns bytes present in file
		$size		= fread($handle, filesize($file));

			// echo $content;
		echo $size;

		fclose($handle);

	}else {
		echo "Unable to write to file";
	}


?>