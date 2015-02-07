<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Tina' && 'Bob';

$result = array_search($query, $names);

function findname($string, $array) {
	return array_search($string, $array)!==false;
}

function compare_arrays($array1, $array2){
	$count = 0;
	
	foreach ($array1 as $name) {
		
		if (findname($name, $array2)) {
			$count++;
		}
	}
	
	return $count;
}

echo "The number of common numbers is: ". (compare_arrays($names, $compare)) . PHP_EOL;

