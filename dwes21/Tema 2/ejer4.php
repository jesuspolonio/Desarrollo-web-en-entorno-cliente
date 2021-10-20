<html>
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>     
    <?php
        $texto = "Álvaro ha estudiado Ingeniería electrónica en la Universidad de Córdoba";
        $newtexto = "Alvaro ha estudiado Ingenieria electronica en la Universidad de Cordoba";
        echo $texto.("<br/>");

        $texto = str_replace($texto, $newtexto, $texto);
        echo $texto.("<br/>");

        $long = strlen($texto);
        echo "La longitud es: ".$long.("<br/>");
        
        $textomayus = strtoupper($texto);
        echo "Texto en mayúsculas: ".$textomayus.("<br/>");
        

        $texto2 = "74635498 B Rubén González Díaz";
        $newtexto2 = "74635498 B Ruben Gonzalez Diaz";
        echo $texto2.("<br/>");

        $texto2 = str_replace($texto2, $newtexto2, $texto2);
        echo $texto2.("<br/>");

        $textosinespacios = str_replace(" ","", $texto2);
        echo $textosinespacios.("<br/>");
        
        ?>
    </body>
</html>