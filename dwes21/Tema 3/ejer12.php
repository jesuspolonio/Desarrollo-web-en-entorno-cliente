<?php

    $array = [rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10)];

    $cont = 0;


    foreach($array as $value){

        echo $value." ";

        if($value == 2){

            $cont++;
        }
    }

    echo "<br/>";
    echo "En total hay: $cont";

?>