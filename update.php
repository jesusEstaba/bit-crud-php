<?php
//update.php

require('conexion.php');

$equipo=$_GET['equipo'];
$id=$_GET['id'];

    $sql="UPDATE equipos SET nombre='$equipo' WHERE id='$id'";
    mysqli_query($cox,$sql);



?>