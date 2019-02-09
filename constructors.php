<?php  

	class Car {

		var $wheels = 4;
		var $hood	= 1;
		var $engine	= 1;
		var $doors	= 4;

		function __construct() {

			$this->wheels 	= 10;
			echo $this->wheels . "<br>";

		}


	}

	$toyota = new Car();

	$bus	= new Car();


?>