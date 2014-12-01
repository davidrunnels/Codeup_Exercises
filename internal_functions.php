<?php


$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

// TEST: If var $nothing is set, display '$nothing is SET'

function set($var) {
	if (isset($var)) {
		return "var is SET";
	} else {
		return "var is EMPTY";
	}
}

var_dump(isset($var));
echo set($nothing) . PHP_EOL;
echo set($something) . PHP_EOL;
echo set($array) . PHP_EOL;

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results