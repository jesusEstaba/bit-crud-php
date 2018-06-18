<?php
    require('conexion.php');

    $equipo = $_GET['equipo'];
    $id = $_GET['id'];

    consulta("DELETE FROM equipos WHERE id='$id'");
?>