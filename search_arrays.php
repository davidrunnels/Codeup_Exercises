<?php


// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Tina' && 'Bob';

$result = array_search($query, $names);

// var_dump($result);

// Create a function that returns TRUE or FALSE 
// if an array value is found. Search for Tina and Bob 
// in $names. Make sure it works as expected.

function findname($string, $array) {
	return array_search($string, $array)!==false;
}

// if else statement:
// if ($result === 0) {
//     return 'false';
// } else {
// 		return 'true';
// 	}

//find 'Tina' in $names array
var_dump(findname('Tina',$names));

//find 'Bob' in $names array
var_dump(findname('Bob',$names));

//Create a function to compare 2 arrays that returns 
// the number of values in common between the arrays. 
// Use the 2 example arrays and make sure 
// your solution uses array_search().

function compare_arrays($array1, $array2){
	$count = 0;
	
	foreach ($array1 as $name) {
		
		if (findname($name, $array2)) {
			$count++;
		}
	}
	
	return $count;
}
var_dump(compare_arrays($names, $compare));
echo "The number of common numbers is: ". (compare_arrays($names, $compare)) . PHP_EOL;

