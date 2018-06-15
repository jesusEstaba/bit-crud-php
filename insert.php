<?php
//insert.php

$equipo=$_GET['equipo'];

$cox=mysqli_connect('localhost', 'root',"", 'the_big_short');
    $sql="INSERT INTO equipos (nombre) VALUES ('$equipo')";
    mysqli_query($cox,$sql);


?>