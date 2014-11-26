<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b;
} else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b;
} else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b;
} else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b;
} else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b;
} else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

echo add(5, 4) . PHP_EOL;
echo subtract(6, 4) . PHP_EOL;
echo multiply(3, 1) . PHP_EOL;
echo divide(16, 4) . PHP_EOL;
echo modulus(19, 4) . PHP_EOL;

