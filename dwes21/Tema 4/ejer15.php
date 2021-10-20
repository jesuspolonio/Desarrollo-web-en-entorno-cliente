<?php

    $int = $_GET["entero"];

    esPrimo($int);

    function esPrimo($int){

        if($int % 2 == 0){

            echo "Es primo";

        } else {

            echo "No es primo";
        }
    }

?>