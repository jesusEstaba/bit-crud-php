<?php
    require('conexion.php');

    $equipos = consulta("SELECT * FROM equipos");

    var_dump($equipos);
?>

