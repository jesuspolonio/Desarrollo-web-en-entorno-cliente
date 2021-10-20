<?php
    $personas = array("Chris" => array(38),
                    "Dennis" => array(45),
                    "Sarah" => array(29),
                    "Karen" => array(47));

    echo '<table border = "1">';
    echo '<td>';
    echo "Person";
    echo '</td>';
    echo '<td>';
    echo "Age";
    echo '</td>';

    foreach($personas as $key => $value){

        echo '<tr>';
        echo '<td>';
        echo $key;
        echo '</td>';

        foreach($value as $key => $value){

            echo '<td>';
            echo $value;
            echo '</td>';
        }
    
        echo '</tr>';
    }

    
echo '</table>';

    $arrayproductos = array("Destornillador" => array(1, 3),
                            "Llave inglesa" => array(2, 5),
                            "Martillo" => array(1, 7),
                            "Total" => array(20));

    echo '<table border = "1">';
    echo '<td>';
    echo "Producto";
    echo '</td>';
    echo '<td>';
    echo "Cantidad";
    echo '</td>';
    echo '<td>';
    echo "Precio";
    echo '</td>';

    foreach($arrayproductos as $key => $value){

        echo '<tr>';
        echo '<td>';
        echo $key;
        echo '</td>';

        foreach($value as $key => $value){

            echo '<td>';
            echo $value;
            echo '</td>';
        }
    
        echo '</tr>';
    }


echo '</table>';


?> 