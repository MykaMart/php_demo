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

	class plane extends Car{

		var $wheels = 20;
		
	}

	$jet = new Plane();

	echo "Jet Wheels: " . $jet->wheels . "<br>";

	$jet->turnWheels();

	echo "Jet Wheels: " . $jet->wheels;

?>