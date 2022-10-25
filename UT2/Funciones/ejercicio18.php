<?php
/*
    18.Muestra  los  fármacos  que  están  caducados.Para  ello,  es  necesario
    crear  un  array  con  5 fármacos; de cada uno se almacena su nombre y la fecha
    de caducidad. Utiliza una función que reciba el array y le devuelva sin los fármacos caducados.
 */
    // nombreFarmaco => dia - mes - año
    $farmacos = [
        "Paracetamol" => "11-11-2022",
        "Ibuprofeno" => "12-4-2024",
        "Aspirina" => "13-04-2023",
        "Dolocatil" => "13-06-2022",
        "Dalsy" => "23-10-2022",
    ];
    echo "ANTES DE LA FUNCION:<br>";

    foreach($farmacos as $farmaco => $fecha){
        echo "$farmaco → $fecha<br>";
    }

    function limpiarArray(&$arrayFarmacos){
        foreach($arrayFarmacos as $farmaco => $fecha){
            if(strtotime($fecha) < time()){
                unset($arrayFarmacos[$farmaco]);
            }
        }

        return $arrayFarmacos;
    }


   limpiarArray($farmacos);

   echo "<br>DESPUÉS DE LA FUNCION:<br>";

   foreach($farmacos as $farmaco => $fecha){
       echo "$farmaco → $fecha<br>";
   }
?>  
