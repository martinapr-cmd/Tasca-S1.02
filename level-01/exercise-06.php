<?php

/*
Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.
Escriu La funció isBitten() que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.

Consell: pot ser que la funció rand () et resulti útil.
*/

echo "Charlie bit my finger! But was it true?\n";

function isBitten(): bool {
    $randomNumber = rand(0, 1); // generates either 0 or 1. 
    return $randomNumber === 1; // === will tell if randomNumber exactly equals to 1! 
}

if (isBitten()) {
    echo "It was true :-(\n";
} else {
    echo "It was false :-D\n";
}





?>