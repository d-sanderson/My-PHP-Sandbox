<?php


$mySnapArray = array(1,2,3,5,8,13,21,34,55,89,144);

echo array_sum($mySnapArray);

function square($n) {
	return($n * $n);
}

$arraysquared = array_map('square', $mySnapArray);

print_r($arraysquared);


function sayHi($name, $age){
	echo "Hello $name, you are $age";
}

sayHi("David", 24);
sayHi("Dude", 13);
sayHi("Jeffrey", 58);

function cube($number) {
	return $number * $number * $number;
}
$cubeResult = cube(4);

echo $cubeResult;

$myArray = array(56,32,323,323,454,323,423);

function cubed($n) {
	return $n*$n*$n;
}
$arrayCubed = array_map(cubed, $myArray);

print_r($arrayCubed);

$isMale = false;
$isTall = false;
if($isMale) {
	echo "You are male";
} elseif ($isMale && !$isTall) {
	echo "You are a short male";
} elseif (!$isMale && $isTall) {
	echo "you are not male but you are tall";
} else {
	echo "You are not male and not tall";
}

function getMax($num1, $num2) {
	if($num1 > $num2) {
		return $num1;
	} else{
		return $num2;
	}
}

?>