<html>
<head>
    <title>Ejercicio 9</title>
</head>
<?php

    $servername = "localhost";
    $database = "medac";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }

    echo "Conectado correctamente"."<br/>";
    echo "--------"."<br/>";

    /*preparamos sentencia SQL*/
    $consulta = "SELECT * FROM usuarios";
    
    /*seleccionamos base de datos*/
    mysqli_select_db($conn, "medac");

    /*ejecutamos consulta a bd*/
    $datos = mysqli_query ($conn, $consulta);

    /*recorremos array*/
    foreach ($datos as $clave => $valor){
        $fecha_int = $valor["fecha_int"];
        $fecha_date = $valor["fecha_date"];
        $fecha_datetime = $valor["fecha_datetime"];
        $fecha_time = $valor["fecha_time"];
        $fecha_timestamp = $valor["fecha_timestamp"];

        echo $fecha_int."<br/>";
        echo $fecha_date."<br/>";
        echo $fecha_datetime."<br/>";
        echo $fecha_time."<br/>";
        echo $fecha_timestamp."<br/>";

        }

        echo "--------"."<br/>";

        echo date('Y-m-d H:i:s', $fecha_int)."<br/>";
        echo date('Y-m-d H:i:s', strtotime($fecha_date))."<br/>";
        echo date('Y-m-d H:i:s', strtotime($fecha_datetime))."<br/>";
        echo date('Y-m-d H:i:s', strtotime($fecha_time))."<br/>";
        echo date('Y-m-d H:i:s', strtotime($fecha_timestamp))."<br/>";

?>
</body>
</html>