<?php

/*
a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. 
A continuació, mostra per pantalla per a X i Y:

El valor de cada variable.
La suma.
La resta.
El producte.
El mòdul.
Per N i M realitzaràs el mateix.

I per a totes les variables (X, Y, N, M):

El doble de cada variable.
La suma de totes les variables.
El producte de totes les variables.
*/

$X = 25;
$Y = 8;

$N = 9.3;
$M = 3.4;

echo "Var X: $X\n";
echo "Var Y: $Y\n";
echo "X + Y: " . ($X + $Y) . "\n";
echo "X - Y: " . ($X - $Y) . "\n";
echo "X * Y: " . ($X * $Y) . "\n"; //producte = multiplicar
echo "X % Y: " . ($X % $Y) . "\n"; // módul = restant de divisió

echo "Var N: $N\n";
echo "Var M: $M\n";
echo "N + M: " . ($N + $M) . "\n";
echo "N - M: " . ($N - $M) . "\n";
echo "N * M: " . ($N * $M) . "\n"; 
echo "N % M: " . ($N % $M) . "\n";

echo "Doble X: " . ($X * 2) . "\n";
echo "Doble Y: " . ($Y * 2) . "\n";
echo "Doble N: " . ($N * 2) . "\n";
echo "Doble M: " . ($M * 2) . "\n";

echo "Suma de totes les variables: " . ($X + $Y + $N + $M) . "\n";
echo "Producte de totes les variables: " . ($X * $Y * $N * $M) . "\n";

/* 
b) Crea un programa que tingui una funció que rebi dos nombres per paràmetre, 
i en un tercer paràmetre que indiqui una operació aritmética(suma,resta,multiplicació o divisió dels dos nombres).

Pensa en tots els casos possibles que ha de tenir aquest programa abans de fer-lo!
*/

$a = 0;
$b = 90;
$operation = "divisio";

switch($operation) {
    case "suma": 
        echo "suma: " . ($a + $b) . "\n";
        break;
    case "resta":
        echo "resta: " . ($a - $b) . "\n";
        break;
    case "multiplicacio": 
        echo "multiplicació: " . ($a * $b) . "\n";
        break;
    case "divisio":
        if ($b == 0 || $a == 0) {
            echo "Error, no es pot dividir per zero\n";
            break;
        }
        echo "divisió: " . ($a / $b) . "\n";
        break;
    default:
        echo "Operació no vàlida";

}







?>