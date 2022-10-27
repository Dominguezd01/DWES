<?php
    require_once("./AlumnoBecado.php");
    echo "--------------CON CLASE ALUMNO---------------<br>";
    $ana = new Alumno("Manolo", 27,007,25);
    
    $ana -> edad = 16;

    $ana -> visualizar();
    echo "No tiene beca<br>";
    
    echo "--------------CON CLASE ALUMNO BECADO---------------<br>";
    // nombre, edad, numMatricula, importe
    $ana2 = new AlumnoBecado("Daniel", 27,23,13);

    $ana2 -> edad = 26;
    $ana2 -> importe = 1;

    $ana2 ->visualizarBecado();



?>