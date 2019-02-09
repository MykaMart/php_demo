<?php  

	class Car {

		//Public variables are accessible by any part of the program
		public $wheels = 4;

		//Protected variables are only available to it's class or subclasses
		protected $hood	= 1;

		//Private variables are only available to it's class
		private $engine	= 2;

		//Var is depriccated in PHP 5 only use Public
		var $doors	= 4;

		function showProperty() {

			echo $this->hood . "<br>";
			echo $this->engine . "<br>";

		}


	}

	$toyota = new Car();

	echo $toyota->showProperty();


	class Bus extends Car {

		function localProperty() {

			echo $this->hood . "<br>";
			echo $this->engine;

		}

	}

	$bus	= new Bus();

	echo $bus->localProperty();

?>