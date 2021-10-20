<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>  
    <?php

        /*Esto declara todos las variables*/
        $varString="Buenas tardes";
        $varInt=2002;
        $varBool=true;
        $varFloat=2.5;

        $arrayVariables = [$varString, $varInt, $varBool, $varFloat];

        /*Esto nos muestra si son verdaderas las variables que sean de tipo string o falsas si no lo son*/
        foreach ($arrayVariables as $array){

            if(is_string($array) == 1){

                echo "Esto es verdad"."<br/>";

            }else{

                echo "Esto es falso"."<br/>";
            }

        }

        echo "<br/>";

        /*Esto hace que las variables que hemos declarado antes se conviertan a variables de tipo String*/
        $varInt1 = strval($varInt);
        $varBool1 = strval($varBool);
        $varFloat1 = strval($varFloat);

        /*Esto es en el array*/
        $arrayVariables1 = [$varString, $varInt1, $varBool1, $varFloat1];

        /*Esto nos muestra si son verdaderas las variables que sean de tipo string o falsas si no lo son*/
        foreach ($arrayVariables1 as $array){

            if(is_string($array) == 1){

                echo "Esto es verdad"."<br/>";

            }else{

                echo "Esto es falso"."<br/>";
            }

        }
    ?>
    </body>
</html>