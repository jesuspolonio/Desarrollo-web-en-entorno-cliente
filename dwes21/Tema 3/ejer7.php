<?php

    /*Dá un número al azar*/
    $dado1 = rand(1,6);
    $dado2 = rand(1,6);
    $dado3 = rand(1,6);

    
    echo $dado1."</br>";
    echo $dado2."</br>";
    echo $dado3."</br>";

    if($dado1 == 6 && $dado2 == 6 && $dado3 == 6){
        echo "Excelente";

    } elseif ($dado1 == 6 && $dado2 == 6 || $dado1 == 6 && $dado3 == 6 || $dado2 == 6 && $dado3 == 6){
        echo "Muy bien";

    } elseif ($dado1 == 6 || $dado2 == 6 || $dado3 == 6){
        echo "Regular";

    } elseif ($dado1 != 6 && $dado2 != 6 && $dado3 != 6){
        echo "Pésimo";
    }  

?>