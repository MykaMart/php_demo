<?php  

	class Car {

		function turnWheels() {

			echo "Wheels turning";

		}


	}

	if(method_exists("Car", "turnWheels")) {

		echo "Queried Method Present";

	} else {

		echo "Queried Method Not Found";

	}

?>