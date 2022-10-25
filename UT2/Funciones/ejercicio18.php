<?php
/*
    18.Muestra  los  fármacos  que  están  caducados.Para  ello,  es  necesario
    crear  un  array  con  5 fármacos; de cada uno se almacena su nombre y la fecha
    de caducidad. Utiliza una función que reciba el array y le devuelva sin los fármacos caducados.
 */

    $farmacos = [
        "Paracetamol" => mktime(0,0,0,12,3,2022),
        "Ibuprofeno" => mktime(0,0,0,12,4,2024),
        "Aspirina" => mktime(0,0,0,13,4,2023),
        "Dolocatil" => mktime(0,0,0,13,6,2022),
        "Dalsy" => mktime(0,0,0,23,10,2020),
    ];

    function limpiarArray(&$arrayFarmacos){
        var_dump($arrayFarmacos);
        foreach($arrayFarmacos as $farmaco => $fecha){
            if($fecha < time()){
                unset($arrayFarmacos[$farmaco]);
            }
        }

        return $arrayFarmacos;
    }


   limpiarArray($farmacos);

    var_dump($farmacos)
?>  
