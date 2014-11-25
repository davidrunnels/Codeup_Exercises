<?php

echo "\nI'm going to count for you.  You'll give me two numbers.\n";

echo "Then you'll tell me what increment I should use to count.\n\n";

do {

	fwrite(STDOUT, "Enter the starting number: ");

	$start_number = trim(fgets(STDIN));

} while (!is_numeric($start_number));

//	Exercise step three
// if(!is_numeric($start_number)) {
//	$start_number = 1;
// }

do {

	fwrite(STDOUT, "Enter the ending number: ");

	$end_number = trim(fgets(STDIN));

} while (!is_numeric($end_number));

do {

	fwrite(STDOUT, "Enter an increment to use to count: ");

	$increment_number = trim(fgets(STDIN));

} while (!is_numeric($increment_number));

if (!$increment_number) {

	$increment_number = 1;
}

for ($i = $start_number; $i <= $end_number; $i += $increment_number) {
	
	echo "{$i}\n";
}
