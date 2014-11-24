<?php

//High Low game

$random_number = mt_rand(1,100);
$guess_number = 1;

do {

	// user guess at number

	fwrite(STDOUT, 'Guess a number. ');

	// Get the input from user

	$guess = trim(fgets(STDIN));


	if (is_numeric($guess)) {

		if ($guess > $random_number) {

    	echo "LOWER\n";

		} elseif ($guess < $random_number) {
   
    	echo "HIGHER\n";

		} elseif ($guess = $random_number) {

		echo "GOOD GUESS!\n";
		}

	}

	else {

		echo "Seriously, enter a NUMBER.\n";
	
	}

		$guess_number++;

} while ($guess != $random_number);

	echo "It took you $guess_number guesses.\n";