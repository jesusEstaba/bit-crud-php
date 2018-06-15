<?php
//select.php (for)


$cox=mysqli_connect('localhost', 'root',"", 'the_big_short');

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

