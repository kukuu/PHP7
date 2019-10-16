<?php

/*
* Spaceship operator
*/

$array = [
	"1<=>1" => 1 <=> 1,
	"1 <=> 2" => 1 <=> 2,
	"2 <=> 1" => 2 <=> 1
];

var_dump($array);

/* OUTPUT
* array(3) {
	["1 <=> 1"] =>
	int(0)

	["1 <=> 2"] =>
	int(-1)


	["2 <=> 1"] =>
	int(1)
}
*/