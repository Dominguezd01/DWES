

<?php
/*
    15.Crea  una  función  que  reciba  una  array  asociativo  que  almacene  los  ingresos
    y  gastos  de una  familia  gallega  durante  un  mes.  El  array  recoge  una  muestra
    de  las  familias  de  cada provincia  de  esa  comunidad.  La  función  devuelve  cual
    es  la  provincia que  más  ahorra. Visualiza la provincia.
 */
    // Provincia -> ingresos, gastos
    $provincias =[
        "La Coruña" => [12500, 3000],
        "Lugo" => [2000, 4000],
        "Orense" => [2500, 2000],
        "Pontevedra" => [2700, 3590]
    ];

    function calcularAhorro ($arrayProvincias){
        $ahorroMax = "";
        $ahorroCantidad = 0;
        foreach($arrayProvincias as $provincias => $valores){
            if($valores[0] - $valores[1] > $ahorroCantidad){
                $ahorroCantidad = $valores[0] - $valores[1];
                $ahorroMax = $provincias;
            }
        }
        return [$ahorroMax,$ahorroCantidad];
    }

    echo "La comunidad que mas ahorra es: ", calcularAhorro($provincias)[0],
        "con un ahorro de: ", calcularAhorro($provincias)[1];
  

    
?>