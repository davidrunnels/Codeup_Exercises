<?php


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


// // Converts array into list n1, n2, ..., and n3
function humanizedlist($string, $sorting = false) {
  // Your solution goes here!
		$array = explode(', ', $string);
		// print_r($array);

		if($sorting){
			natcasesort($array);
			// print_r($array);
		}
		
		$last_item = array_pop($array);
		//$new_last_item = 'and '. $last_item;
		//array_push($array, $new_last_item);
		
		$new_string = implode(', ', $array);
		
		return "{$new_string} and {$last_item}";
	
}
// function sorting_option($array) {
// 	return natcasesort($array);
// }

// sorting_option($famousFakePhysicists);
// Humanize that list
$famousFakePhysicists = humanizedlist($physicistsString, true);

// Update your code to list the physicists by first name, in alphabetical order

  
// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";

