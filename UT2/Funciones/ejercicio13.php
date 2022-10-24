<?php

$horasLectivas = [
    "Desarrollo Entorno Servidor" => 9,
    "Desarrollo Entorno Cliente" => 8,
    "Despliegue de Aplicaciones Web" => 4,
    "Empresa e Iniciativa emprendedora" => 3,
    "Interfaces Web" => 6,
];

function horasMax($arrayHoras){

    $max = 0;
    $clave = "";
    foreach ($arrayHoras as $key => $valor) {
        if ($valor > $max) {
            $max = $valor;
            $clave = $key;
        }
    }
    return $clave;
}

$asignatura == horasMax($horasLectivas);
echo "El módulo con más horas es: ",horasMax($horasLectivas);