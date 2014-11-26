<?php


 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         // Output Monday
     	echo "It's Monday.";
     	break;
     case 2:
         // Output Tuesday
     	echo "It's Winedown Tuesday!" . PHP_EOL;
     	break;
     case 3:
     	echo "It's Food Truck Wednesday!" . PHP_EOL;
     	break;
     // etc through day 7
     case 4:
     	echo "It's Thursday." . PHP_EOL;
     	break;
     case 5:
     	echo "It's Friday!" . PHP_EOL;
     	break;
     case 6:
     	echo "It's Saturday." . PHP_EOL;
     	break;
     case 7:
     	echo "Easy like a Sunday morning." . PHP_EOL;
     	break;
     default:
     	echo "The space time continuum has torn!"

// Test results
 }

 if ($dayOfWeek = 7) {
 	echo "Test line:  It's Food Truck Wednesday!";

 }