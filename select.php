<?php
    require('conexion.php');

    $sql = "SELECT*FROM equipos";
    $ResultadoDeLaConsulta = mysqli_query($cox,$sql);

    while ($equipo = mysqli_fetch_assoc($ResultadoDeLaConsulta)) {
        echo $equipo['nombre']. '<br>';
    }
?>

