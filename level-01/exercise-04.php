<?php

/* 
Fes un programa que implementi una funció on es compti fins a un nombre determinat. 
Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. 
A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). 
El compte s’ha de mostrar per pantalla pas per pas.
*/

function counting($start = 1, $max = 10, $step = 1) {
    for ($i = $start; $i <= $max; $i += $step) {
        echo $i . "\n";
    }
}

// start = can start at any number, default is 1
// max = can count up to any number, default is 10
// step = can count by any step, default is 1

counting(); // default
echo "\n";

counting(10, 50, 5); // counts from 10 to 50 by 5
echo "\n";

?>



