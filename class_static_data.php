<?php  

	class Car {

		//Static variable cannot be altered or refereced by instances.
		static  $wheels = 4;
		var		$hood	= 1;

		function turnWheels() {

			//To alter static variable you must call the Class and variable like so;
			Car::$wheels 	= 10;

		}


	}

	$toyota = new Car();
	// echo $toyota->turnWheels;

	//To run a method that uses a static variable you must call the class and method like so;
	Car::turnWheels();
	//To call a static variable you must call the Class and variable like so;
	echo Car::$wheels;

?>