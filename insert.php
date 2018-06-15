<?php
//insert.php

require('conexion.php');

$equipo=$_GET['equipo'];


    $sql="INSERT INTO equipos (nombre) VALUES ('$equipo')";
    mysqli_query($cox,$sql);


?>