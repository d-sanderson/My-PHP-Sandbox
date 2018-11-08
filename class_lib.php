<?php
class Dog {

	var $name;

	public $weight;

	public $breed;

	function __construct($dogs_name, $dogs_breed, $dogs_weight) {
		$this->name = $dogs_name;
		$this->breed = $dogs_breed;
		$this->weight = $dogs_weight;
	}


	function set_name($new_name) {
		$this->name = $new_name;
	}

	function get_name($new_name) {
		return $this->name;
	}

	function set_breed($new_breed) {
		$this->breed = $new_breed;
	}

	function get_breed($new_breed) {
		return $this->breed;
	}

	function set_weight($new_weight) {
		$this->weight = $new_weight;
	}

	function get_weight($new_weight) {
		return $this->weight;
	}
}

$comet = new Dog("Comet", "Boxer", "60");

$patch = new Dog("Patch", "Pit", "80");

var_dump($comet);
var_dump($patch);


class FoodTruck {

	var $name;

	var $bio;
}

?>