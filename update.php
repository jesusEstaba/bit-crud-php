<?php
    require('conexion.php');

    $equipo = $_GET['equipo'];
    $id = $_GET['id'];

    consulta("UPDATE equipos SET nombre='$equipo' WHERE id='$id'");
?>