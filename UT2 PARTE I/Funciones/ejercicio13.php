<?php
    function calcularEdad($mes,$dia,$año){
        $fecha_nac= date("d-m-Y", mktime(0, 0, 0, $dia, $mes, $año));
        echo $fecha_nac,"<br>";
        $hoy =getdate();
        echo date("d-m-Y", mktime(0,0,0,$hoy["year"]));
    }

    calcularEdad(15,3,2006);
?>