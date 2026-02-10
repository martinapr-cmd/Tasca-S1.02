<?php

/*

Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:
- Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
- Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
- Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
- Si la nota és menor a 33%, l'estudiant reprovarà.

*/


function verifyGrade($grade) { 
    if ($grade >= 60) { 
        return "Primera Divisió"; 
    } elseif ($grade >= 45) { 
        return "Segona Divisió"; 
    } elseif ($grade >= 33) { 
        return "Tercera Divisió"; 
    } else { 
        return "Reprovat"; 
    } }

echo verifyGrade(70) . "\n";
echo verifyGrade(50) . "\n";
echo verifyGrade(40) . "\n";
echo verifyGrade(20) . "\n";



?>