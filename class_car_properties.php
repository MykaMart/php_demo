<?php  

	class Car {

		var $wheels = 4;
		var $hood	= 1;
		var $engine	= 1;
		var $doors	= 4;

		function turnWheels() {

			$this->wheels 	= 10;

		}

		function openDoors() {

			$this->doors 	= 6;

		}


	}

	$toyota = new Car();

	$toyota->turnWheels();
	echo "Toyota Wheels: " . $toyota->wheels . "<br>";

	$bus = new Car();

	$bus->openDoors();
	echo "Bus Doors: " . $bus->doors;

	

?>