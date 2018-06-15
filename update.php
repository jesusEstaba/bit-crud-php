<?php
//update.php

$equipo=$_GET['equipo'];
$id=$_GET['id'];

$cox=mysqli_connect('localhost', 'root',"", 'the_big_short');
    $sql="UPDATE equipos SET nombre='$equipo' WHERE id='$id'";
    mysqli_query($cox,$sql);



?>