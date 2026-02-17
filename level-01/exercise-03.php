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

function calculator(int $num1, int $num2, string $operation): float|string {
    switch(strtolower($operation)) { 
        case 'suma':
            return $num1 + $num2;
        case 'resta':
            return $num1 - $num2;
        case 'multiplicació':
            return $num1 * $num2;
        case 'divisió':
            if ($num2 == 0) {
                return "No es pot dividir per zero.";
            }
            return $num1 / $num2;
        default:
            return "Operador invalid.";
    }

}

echo calculator(10, 5, 'suma') . "\n"; 
echo calculator(10, 5, 'resta') . "\n";
echo calculator(10, 5, 'multiplicació') . "\n";
echo calculator(10, 5, 'divisió') . "\n";
echo calculator(10, 0, 'divisió') . "\n";
echo calculator(10, 5, 'hola') . "\n"; 

?>