<?php  

	class Car {

		function turnWheels() {

			echo "Wheels turning";

		}


	}

	$toyota = new Car();
	$tesla	= new Car();

	$toyota->turnWheels();
	$tesla->turnWheels();
	$toyota->turnWheels();

?>