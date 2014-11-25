<?php


for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 1) {
        continue;
     }
        echo $i . "\n";
 
}

for ($i = 1; $i <= 100; $i++) {
     echo $i . "\n";

     if ($i == 10) {
       
        break;

    }

}
        
