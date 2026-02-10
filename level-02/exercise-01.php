<?php

/*
Escriu una funció que determini la quantitat total a pagar per una trucada 
telefònica segons les següents premisses:

- Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
- Cada minut addicional a partir dels 3 primers és un pas de comptador 
i costa 5 cèntims.

*/

function totalCost($minutes, $baseCost = 10, $stepCost = 5) {
    if ($minutes < 3) {
       return $baseCost;
    } else {
        $extraMinutes = $minutes - 3; //substract 3, just to count the extra minutes
        $totalCost = $baseCost + ($extraMinutes * $stepCost); //total = 10(base) + (extra minutes * 5(each minute))
        return $totalCost;
    }
}

$total = totalCost(4);
echo "Full price of the call: " . $total . " cents\n";

?>