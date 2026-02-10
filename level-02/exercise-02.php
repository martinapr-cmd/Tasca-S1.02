<?php

/*
Imagina que estàs programant part de la lògica de la classificació de punts d'un joc.
En aquest programa necessitem entrar 3 puntuacions diferents(les puntuacions són 
entre 0 i 9999). D'aquestes puntuacions necessitarem:

- La seva suma
- La seva mitjana
- La classificació. Sent "Principiant" menor de 4000. "Intermedi" menor 
de 8000 i "Professional" la resta.

Pensa a fer més d'una funció per resoldre aquest problema.
*/

function sumScores($score1, $score2, $score3) {
    return $score1 + $score2 + $score3;
}

function averageScore($score1, $score2, $score3) {
    return ($score1 + $score2 + $score3) / 3;
}

function classifyScore($averageScore) {
    if ($averageScore < 4000) {
        return "Principiant";
    } elseif ($averageScore < 8000) {
        return "Intermedi";
    } else {
        return "Professional";
    }
}

$score1 = rand(0, 9999);
$score2 = rand(0, 9999);
$score3 = rand(0, 9999);
echo "Scores: $score1, $score2, $score3\n";

$totalScore = sumScores($score1, $score2, $score3);
$average = averageScore($score1, $score2, $score3);
$clasification = classifyScore($average);

echo "Sum of scores: " . $totalScore . "\n";
echo "Average score: " . $average . "\n";
echo "Classification: " . $clasification . "\n";



?>