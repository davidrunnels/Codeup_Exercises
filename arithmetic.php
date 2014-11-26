<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b;
} else {
        echo "ERROR: Both arguments must be numbers\n";
        echo "You tried to add {$a} and {$b}.";
    }
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b;
} else {
        echo "ERROR: Both arguments must be numbers\n";
        echo "You tried to subtract {$b} from {$a}.";
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b;
} else {
        echo "ERROR: Both arguments must be numbers\n";
        echo "You tried to multiply {$a} and {$b}.";
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b;
            if ($a == 0 || $b == 0) {
                echo "You cannot divide by zero.\n";
                echo "You tried to divide {$b} by {$a}.";
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
        echo "You entered the arguements {gettype($a)} and {gettype($b)}.";
    }
}

echo add(5, 4) . PHP_EOL;
echo subtract(6, 4) . PHP_EOL;
echo multiply(3, 1) . PHP_EOL;
echo divide(16, 4) . PHP_EOL;
echo modulus(19, 4) . PHP_EOL;

