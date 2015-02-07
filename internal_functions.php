<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

function set($var) {
	if (isset($var)) {
		return "var is SET";
	} else {
		return "var is EMPTY";
	}
}

echo set($nothing) . PHP_EOL;

echo set($something) . PHP_EOL;

$ser_var = serialize($array) . PHP_EOL;

var_dump(unserialize($ser_var));
