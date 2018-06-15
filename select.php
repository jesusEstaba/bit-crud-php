<?php
//probando el codigo
    require('conexion.php');

    $sql = "SELECT*FROM equipos";
    $ResultadoDeLaConsulta = mysqli_query($cox,$sql);
    $equipos = mysqli_fetch_all($ResultadoDeLaConsulta);

    foreach ($equipos as $equipo) {
        echo $equipo[1]. '<br>';
    }
?>

