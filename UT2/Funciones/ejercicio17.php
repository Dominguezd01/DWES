<?php
function dias_hasta_navidad($mes, $dia, $año){
    date_default_timezone_set("Europe/Madrid");
    $fecha_navidad= mktime(0, 0, 0, $dia, $mes, $año);

    $hoy = time();
    
    $segundosHastaNavidad = $fecha_navidad -$hoy;
    
    $dias = $segundosHastaNavidad/60/60/24;
    
    return (int)$dias;
}

echo dias_hasta_navidad(25,12,2022), " días hasta Navidad";
?>        