<?php
//select.php (for)

    require('conexion.php');

    $sql="SELECT*FROM equipos";

    $ResultadoDeLaConsulta=mysqli_query($cox,$sql);

    $equipos= mysqli_fetch_all($ResultadoDeLaConsulta);

    #hacerlo con for
    for($i=0;$i<count($equipos);$i++) {
        
        echo $equipos[$i][1]. '<br>';
    }
    #hacerlo con foreach
    foreach ($equipos as $equipo) {
        
        echo $equipo[1]. '<br>';
    }
    #llamado directo al arreglo
    echo $equipos [0][1];


?>

