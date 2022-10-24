<?php
$horasLectivas = [
    "Desarrollo Entorno Servidor" => 9,
    "Desarrollo Entorno Cliente" => 8,
    "Despliegue de Aplicaciones Web" => 4,
    "Empresa e Iniciativa emprendedora" => 3,
    "Interfaces Web" => 6,
];
require_once("./ejercicio13.php");
function eliminarMaxHora(&$arrayHoras, $asignatura){
    foreach($arrayHoras as $key => $valor){
        if($key == $asignatura){
            unset($key);
        }
    }
    echo $arrayHoras;
}

eliminarMaxHora($horasLectivas, $asignatura);
?>