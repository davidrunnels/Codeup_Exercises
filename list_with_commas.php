<?php


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$famousFakePhysicists = explode(', ', $physicistsString);

var_dump($famousFakePhysicists);

 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists[0]}, {$famousFakePhysicists[1]}, {$famousFakePhysicists[2]}, {$famousFakePhysicists[3]}, {$famousFakePhysicists[4]} {$famousFakePhysicists[5]}.";
