<?php

/*
Escriu una funció que determini la quantitat total a pagar per una trucada 
telefònica segons les següents premisses:

- Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
- Cada minut addicional a partir dels 3 primers és un pas de comptador 
i costa 5 cèntims.

*/
Define('MINUTES_INCLUDED', 3);
Define('BASE_COST', 10);
Define('STEP_COST', 5);

function totalCost($minutes) {
    if ($minutes <= MINUTES_INCLUDED) {
        return BASE_COST;
    } else {
        $additionalMinutes = $minutes - MINUTES_INCLUDED;
        return BASE_COST + ($additionalMinutes * STEP_COST);
    }
}

$total = totalCost(4);
echo "Full price of the call: " . $total . " cents\n";



?>