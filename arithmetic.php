<?php

function error_message($a, $b) {
    echo "ERROR: Both arguments must be numbers.";
    echo "\$a = $a, and \$b = $b.";
}


function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b;
} else {
        error_message($a, $b);
    }
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b;
} else {
    error_message($a, $b);
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b;
} else {
        error_message($a, $b);
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b;
            if ($a == 0 || $b == 0) {
                echo "You cannot divide by zero.\n";
                error_message($a, $b);
            }
} else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b;
         if ($a == 0 || $b == 0) {
                echo "You cannot divide by zero.\n";
                echo "You tried to find the modulus of {$a} and {$b}.";
        }
} else {
        echo "ERROR: Both arguments must be numbers\n";

    }
}


echo add(5, 4) . PHP_EOL;
echo subtract(6, 4) . PHP_EOL;
echo multiply(3, 1) . PHP_EOL;
echo divide(16, 4) . PHP_EOL;
echo modulus(19, 4) . PHP_EOL;

