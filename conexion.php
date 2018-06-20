<?php

    $cox = mysqli_connect('localhost', 'root', '', 'the_big_short');

    function consulta($sql) {
        global $cox;
        
        $ResultadoDeLaConsulta = mysqli_query($cox,$sql);

        $datos = [];

        if(!($ResultadoDeLaConsulta == True || $ResultadoDeLaConsulta == False)){

            while ($dato = mysqli_fetch_assoc($ResultadoDeLaConsulta)) 
                $datos[] = $dato;
                
        }

        

        return $datos;
    }