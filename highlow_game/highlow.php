<?php

//High Low game

// Generate random number

// int rand(1,100);

// Assign random number

$random_number = rand(1,100);


// user gets high low feedbak

do {

	// user guess at number

	fwrite(STDOUT, 'Guess? ');

	// Get the input from user

	$guess = fgets(STDIN);

	if ($guess > $random_number) {

    echo "LOWER\n";

	}elseif ($guess < $random_number) {
   
    echo "HIGHER\n";

	} elseif ($guess = $random_number) {

	echo "GOOD GUESS!\n";
	}

} while ($guess != $random_number);