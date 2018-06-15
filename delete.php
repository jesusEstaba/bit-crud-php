<?php
//delet.php

$equipo=$_GET['equipo'];
$id=$_GET['id'];

$cox=mysqli_connect('localhost', 'root',"", 'the_big_short');
    $sql="DELETE FROM equipos WHERE id='$id'";
    mysqli_query($cox,$sql);

?>