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

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

echo set($nothing) . PHP_EOL;

// TEST: If var $something is set, display '$something is SET'

echo set($something) . PHP_EOL;

// Serialize the array $array, and output the results

$ser_var = serialize($array) . PHP_EOL;

// Unserialize the array $array, and output the results

var_dump(unserialize($ser_var));
