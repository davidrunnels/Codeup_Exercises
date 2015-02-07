<?php


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

function humanizedlist($string, $sorting = false) {
		$array = explode(', ', $string);

		if($sorting){
			asort($array);

		}
		
		$last_item = array_pop($array);
		$new_string = implode(', ', $array);
		
		return "{$new_string} and {$last_item}";
	
}

$famousFakePhysicists = humanizedlist($physicistsString, true);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";

