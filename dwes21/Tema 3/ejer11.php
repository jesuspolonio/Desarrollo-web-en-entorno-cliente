<?php

    $array = [2, 54, 28, 74, 95, 104, 421, 43, 9023, 5473];

    $maximo = 0;

    foreach($array as $valor){
        
        if($valor >= $maximo){

            $maximo = $valor;
        }
    }

    echo $maximo;

?>