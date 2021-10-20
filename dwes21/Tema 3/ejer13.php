<?php

    $array = [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
             [2, 3, 4, 5, 6, 7, 8, 9, 10, 1],
             [3, 4, 5, 6, 7, 8, 9, 10, 1, 2],
             [4, 5, 6, 7, 8, 9, 10, 1, 2, 3],
             [5, 6, 7, 8, 9, 10, 1, 2, 3, 4],
             [5, 6, 7, 8, 9, 10, 1, 2, 3, 4],
             [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
             [3, 4, 5, 6, 7, 8, 9, 10, 1, 2],
             [4, 5, 6, 7, 8, 9, 10, 1, 2, 3],
             [2, 3, 4, 5, 6, 7, 8, 9, 10, 1]];

    $sum = 0;
    $sum2 = 0;

    for($i = 0; $i < count($array); $i++){

        $sum += $array[$i][$i];
    }

    for($j = 0; $j < count($array); $j++){

        $sum2 += $array[$j][count($array) - $j - 1];

    }

    $diferencia = $sum2 - $sum;

    echo "La suma de la primera diagonal es: $sum"."<br/>";
    echo "La suma de la segunda diagonal es: $sum2"."<br/>";
    echo "La diferencia entre la suma de estas dos diagonales es: $diferencia";


?>