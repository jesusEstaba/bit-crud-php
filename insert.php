<?php
    require('conexion.php');

    $equipo = $_GET['equipo'];

    consulta("INSERT INTO equipos (nombre) VALUES ('$equipo')");
?>