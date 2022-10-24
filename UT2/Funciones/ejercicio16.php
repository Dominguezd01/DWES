<?php
    function calcularEdad($mes,$dia,$año){
        $fecha_nac= mktime(0, 0, 0, $dia, $mes, $año);
  
        $hoy =time();
        $segundosV = $hoy - $fecha_nac;
        $edad = $segundosV/31557600; // Esto era /60/60/24/365.25

        echo (int)$edad;
    }

    calcularEdad(12,6,2001);
?>