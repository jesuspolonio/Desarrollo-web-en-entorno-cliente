<?php

    $semanaSiguiente = time() + (7 * 24 * 60 * 60);

    echo "Ahora:             ".date('Y-m-d')."<br/>";
    echo "Semana siguiente:  ".date('Y-m-d', $semanaSiguiente)."<br/>";
    echo "Semana siguiente:  ".date('Y-m-d', strtotime('+ 1 week'))."<br/>";

?>