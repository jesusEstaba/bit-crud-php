<?php

    $cox = mysqli_connect('localhost', 'root', '', 'the_big_short');

    function consulta($sql) {
        global $cox;
        
        $ResultadoDeLaConsulta = mysqli_query($cox,$sql);

        $datos = [];

        while ($dato = mysqli_fetch_assoc($ResultadoDeLaConsulta)) {
            $datos[] = $dato;
        }

        return $datos;
    }