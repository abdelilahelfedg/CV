<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    
    $delta = pow($b, 2) - 4 * $a * $c;

    if ($delta < 0){
        $nbrSolutions = 0;    // le variable "$nbrSolutions" stocke le nombre de solutions de l'equation.
    } elseif ($delta === 0){
        $nbrSolutions = 1;
    } else {
        $nbrSolutions = 2;
    }

    echo "<h2>Solutions Equation du second degre</h2>";
    echo "<p>Equation : $a * x^2 + $b * x + $c = 0</p>";

    if ($nbrSolutions === 0){
        echo "<p>l'equation n'a pas de solution reelle.</p>";
    } elseif ($nbrSolutions === 1){
        $x = -$b / (2 * $a);
        echo "<p>l'equation a une solution unique : x = $x</p>";
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "<p>l'equation a deux solutions : x1 = $x1 et x2 = $x2</p>";
    }
?>