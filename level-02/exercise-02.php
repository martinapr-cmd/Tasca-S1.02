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


// Constants (no magic numbers)
define('NUM_SCORES', 3);
define('BEGINNER_THRESHOLD', 4000);
define('INTERMEDIATE_THRESHOLD', 8000);
define('MIN_SCORE', 0);
define('MAX_SCORE', 9999);

//we make the scores an array!
function sumScores(array $scores): int {
    return array_sum($scores);
}

function averageScore(array $scores): float {
    return array_sum($scores) / NUM_SCORES;
}

function classifyScore(float $averageScore) {
    if ($averageScore < BEGINNER_THRESHOLD) {
        return "Principiant";
    } elseif ($averageScore < INTERMEDIATE_THRESHOLD) {
        return "Intermedi";
    } else {
        return "Professional";
    }
}

// Generate scores
$scores = [
    rand(MIN_SCORE, MAX_SCORE),
    rand(MIN_SCORE, MAX_SCORE),
    rand(MIN_SCORE, MAX_SCORE)
];

// implode() takes an array and turns it into a string, you choose what goes in between the elements.
echo "Scores: " . implode(", ", $scores) . "\n";

$totalScore = sumScores($scores);
$average = averageScore($scores);
$classification = classifyScore($average); // we take the $average and pass it to the classifyScore function. 

echo "Sum of scores: $totalScore\n";
echo "Average score: $average\n";
echo "Classification: $classification\n";


?>