<?php

/*
Imprimeix per pantalla "Hello, World!" utilitzant una variable. En acabat:

- Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
- Imprimeix per pantalla la mida (longitud) de la variable.
- Imprimeix per pantalla l'string en ordre invers de caràcters.
- Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings.

*/

$hello = "Hello, World!";
echo "$hello\n";

$hello_upr = "Hello, World!";
$hello_upr = strtoupper($hello_upr);
echo "$hello_upr\n";

echo "lenght: " . strlen($hello) . "\n";

echo "reverse: " . strrev($hello) . "\n";


$frase = "Aquest és el curs de PHP.";
echo "$frase\n";

echo "$hello " . "$frase";

?>