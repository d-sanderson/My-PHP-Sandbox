<?php

/**
 * OOP and Class Instantiation Practice for Assessment 11/21
 *
 * The First section of the Dog Class created below shows how to create a class with properties, methods, and constructors.
 * Properties are Variables within an Object.
 * Methods are functions within an Object.
 * Constructors allow you to initialize your object's properties (translation: give your properties values,) when you instantiate (create) an object.
 *
 * The sections that follow include an insert statement for the backend and query function to grab 
 * @author David Sanderson <sanderdj90@gmail.com>
 * @version 1.0.0
 **/

class Dog {

	// declare properties

	public $dogName;

	protected $dogBreed;

	protected $dogOwner;

	protected $dogWeight;



	/**
	 * constructor for this Dog so that new Dogs can have properties declared when the Object is instantiated.
	 *
	 * @param string $newDogName name of this Dog, not null.
	 * @param string|$newDogBreed name of Dog's Breed, not null.
	 * @param string $newDogOwner name of Dog's Owner, can be null.
	 * @param int $newDogWeight weight of dogs in lbs.

	  //TODO REVIEW THESE ERROR MESSAGES FOR ASSESSMENT/STUDY
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 * @Documentation https://php.net/manual/en/language.oop5.decon.php
	 **/

	function __construct($newDogName, $newDogBreed, $newDogOwner, $newDogWeight) {
		$this->dogName = $newDogName;
		$this->dogBreed = $newDogBreed;
		$this->dogOwner = $newDogOwner;
		$this->dogWeight = $newDogWeight;
	}

	// declare methods

	//TODO ADD Try/catch blocks on setters so only valid inputs can be entered.

	/**
	 * mutator method for dog Name
	 *
	 * @param string $newDogName new name of the Dog
	 * @throws \TypeError if $newDogName is not a string
	 **/

	function setDogName($newDogName) {
		$this->dogName = $newDogName;
	}

	/**
	 * accessor method for dog name
	 *
	 * @return string value name of dog
	 **/

	function getDogName() {
		return $this->dogName;
	}

	/**
	 * mutator method for dog Breed
	 *
	 * @param string $newDogBreed new name of the Dog Breed
	 * @throws \TypeError if $newDogBreed is not a string
	 **/
	function setDogBreed($newDogBreed) {
		$this->dogBreed = $newDogBreed;
	}

	/**
	 * accessor method for dog breed
	 *
	 * @return string value name of dog breed.
	 **/

	function getDogBreed() {
		return $this->dogBreed;
	}

	/**
	 * mutator method for dog Weight
	 *
	 * @param string $newDogWeight weight in lbs of the dog stored in upper case.
	 * @throws \TypeError if $newDogBreed is not an integer
	 **/

	function setDogWeight($newDogWeight) {
		$this->dogWeight = strtoupper($newDogWeight);
	}

	/**
	 * accessor method for dog weight
	 *
	 * @return integer value of dog weight
	 **/

	function getDogWeight() {
		return $this->dogWeight;
	}

	/**
	 * mutator method for dog Owner
	 *
	 * @param string $newDogOwner name of the dog Owner stored in upper case.
	 * @throws \TypeError if $newDogOwner is not a string
	 **/

	function setDogOwner($newDogOwner) {
			$this->dogOwner = strtoupper($newDogOwner);
		}

	/**
	 * accessor method for dog owner
	 *
	 * @return string value of dog owner's name.
	 **/

	function getDogOwner() {
		return $this->dogOwner;
	}


	/**
	 * inserts this Pup (Dog) into mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function insert(\PDO $pdo) : void {

		// create query template
		$query = "INSERT INTO dog(dogName, dogBreed, dogOwner, dogWeight) VALUES(:dogName, :dogBreed, :dogOwner, :dogWeight)";
		$statement = $pdo->prepare($query);

		// bind the member variables to the place holders in the template
		$parameters = ["dogName" => $this->dogName, "dogBreed" => $this->dogBreed, "dogOwner" => $this->dogOwner, "dogWeight" => $this->dogWeight];
		$statement->execute($parameters);
	}

	// mySQL queries/PHP Data Objects (PDO) below

	// 1) get FooByBar and return an Object NOTE THIS FUNCTION NEEDS WERK.
	// 2) get FooByBar and return an SPLFixedArray.

	/**
	 * gets the Dog by Owner Name
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param string $dogOwner name of owner to search for
	 * @return Dog|null Dog found or null if no matches owner matches
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when a variable are not the correct data type
	 **/

	public static function getDogByDogOwnerName(\PDO $pdo,  $dogOwner) : ?Dog {
		//TODO might have to rewrite this since one owner can have multiple dogs. Need to find a function that would return a single value?
		try {
			//change the owner name to uppercase like it is stored in mySQL
			$dogOwner = strtoupper($dogOwner);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}

		// create query template
		$query = "SELECT dogName, dogBreed, dogOwner, dogWeight FROM dog WHERE dogOwner = :dogOwner";
		$statement = $pdo->prepare($query);

		// bind the owner name to the place holder in the template
		$parameters = ["dogOwner" => $dogOwner];
		$statement->execute($parameters);

		// grab the dog from mySQL
		try {
			$dog = null;
			$statement->setFetchMode(\PDO::FETCH_ASSOC);
			$row = $statement->fetch();
			if($row !== false) {
				$dog = new Dog($row["dogName"], $row["dogBreed"], $row["dogWeight"], $row["dogOwner"]);
			}
		} catch(\Exception $exception) {
			// if the row couldn't be converted, rethrow it
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}
		return($dog);
	}

	/**
	 * gets the Dog by Breed
	 *
	 * @param \PDO $pdo PDO connection object
	 * @param string $dogBreed to search by
	 * @return \SplFixedArray SplFixedArray of Dogs found w. matching breed
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError when variables are not the correct data type
	 **/
	public static function getDogsByDogBreed(\PDO $pdo, $dogBreed) : \SplFixedArray {

		try {
			$dogBreed = strtoupper($dogBreed);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			throw(new \PDOException($exception->getMessage(), 0, $exception));
		}

		// create query template
		$query = "SELECT dogName, dogBreed, dogOwner, dogWeight FROM dog WHERE dogBreed = :dogBreed";
		$statement = $pdo->prepare($query);
		// bind the breed to the place holder in the template
		$parameters = ["dogBreed" => $dogBreed];
		$statement->execute($parameters);
		// build an array of dogs that have the same breed.
		$dogs = new \SplFixedArray($statement->rowCount());
		$statement->setFetchMode(\PDO::FETCH_ASSOC);
		while(($row = $statement->fetch()) !== false) {
			try {
				$dog = new Dog ($row["dogName"], $row["dogBreed"], $row["dogOwner"], $row["dogWeight"]);
				$dogs[$dogs->key()] = $dog;
				$dogs->next();
			} catch(\Exception $exception) {
				// if the row couldn't be converted, rethrow it
				throw(new \PDOException($exception->getMessage(), 0, $exception));
			}
		}
		return($dogs);
	}


	}




$comet = new Dog("Comet", "Boxer", "David", 60);

$patch = new Dog("Patch", "Pit", "David", 80);

var_dump($comet);
var_dump($patch);




?>