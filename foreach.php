<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string)11);

foreach ($things as $value) {
    echo gettype($value) . PHP_EOL;
}

echo "\n";

foreach ($things as $value) {
	if (is_scalar($value))
		echo $value . PHP_EOL;
}

echo "\n";

foreach ($things as $value) {
	echo $things . PHP_EOL;

	if (is_array($things)) {

		foreach ($things as $value) {
		echo $things . PHP_EOL;
		}
	}

}

