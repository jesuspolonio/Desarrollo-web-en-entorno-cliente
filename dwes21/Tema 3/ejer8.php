<?php 
    /*Variables*/
    $peso =$_GET["peso"];
    $altura =$_GET["altura"];
    $imc = $peso/($altura)**2;

    /*Todo este código nos indica que depende del valor del peso y altura nos dirá el grado de peso*/
    if($imc < 18.5){

        echo "Tiene un peso de: $peso"."</br>";
        echo "Tiene una altura de: $altura"."</br>";
        echo "Su IMC es de: $imc"."</br>";
        echo "Bajo peso";

    } elseif ($imc >= 18.5 && $imc <= 24.9){

        echo "Tiene un peso de: $peso"."</br>";
        echo "Tiene una altura de: $altura"."</br>";
        echo "Su IMC es de: $imc"."</br>";
        echo "Normopeso";

    } elseif ($imc >= 25 && $imc <= 26.9){

        echo "Tiene un peso de: $peso"."</br>";
        echo "Tiene una altura de: $altura"."</br>";
        echo "Su IMC es de: $imc"."</br>";
        echo "Sobrepeso grado I";

    } elseif ($imc >= 27 && $imc <= 29.9){

        echo "Tiene un peso de: $peso"."</br>";
        echo "Tiene una altura de: $altura"."</br>";
        echo "Su IMC es de: $imc"."</br>";
        echo "sobrepeso grado II";

    } elseif ($imc >= 30 && $imc <= 34.9){
        
        echo "Tiene un peso de: $peso"."</br>";
        echo "Tiene una altura de: $altura"."</br>";
        echo "Su IMC es de: $imc"."</br>";
        echo "Obesidad de tipo I";

    } elseif($imc >= 35 && $imc <= 39.9){

        echo "Tiene un peso de: $peso"."</br>";
        echo "Tiene una altura de: $altura"."</br>";
        echo "Su IMC es de: $imc"."</br>";
        echo "Obesidad de tipo II";

    } elseif($imc >= 40 && $imc <= 49.9){

        echo "Tiene un peso de: $peso"."</br>";
        echo "Tiene una altura de: $altura"."</br>";
        echo "Su IMC es de: $imc"."</br>";
        echo "Obesidad de tipo III(mórbida)";

    } elseif($imc > 50){

        echo "Tiene un peso de: $peso"."</br>";
        echo "Tiene una altura de: $altura"."</br>";
        echo "Su IMC es de: $imc"."</br>";
        echo "Obesidad de tipo IV(extrema)";
        
    }
?>