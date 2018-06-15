<?php
//delet.php

require('conexion.php');

$equipo=$_GET['equipo'];
$id=$_GET['id'];

    $sql="DELETE FROM equipos WHERE id='$id'";
    mysqli_query($cox,$sql);

?>