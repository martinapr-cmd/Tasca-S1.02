<?php

/*
Escriu una funció que determini la quantitat total a pagar per una trucada 
telefònica segons les següents premisses:

- Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
- Cada minut addicional a partir dels 3 primers és un pas de comptador 
i costa 5 cèntims.

*/

function totalCost(int $minutes, int $baseCost = 10, int $stepCost = 5): int {

    $includedMinutes = 3; // the first 3 minutes are included in the base cost, set variable to avoid magic number!!!
    
    if ($minutes < $includedMinutes) {
       return $baseCost;
    } else {
        $extraMinutes = $minutes - $includedMinutes; //substract 3, just to count the extra minutes
        return $baseCost + ($extraMinutes * $stepCost);
    }
}

$total = totalCost(4);
echo "Full price of the call: " . $total . " cents\n";




?>