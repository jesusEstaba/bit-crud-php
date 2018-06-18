<?php

    $cox = mysqli_connect('localhost', 'root', '', 'the_big_short');

    function consulta($sql) {
        mysqli_query($cox,$sql);
    }