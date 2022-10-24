<?php
    require_once("./ejercicio21.php");

    echo "----- FUNCIÓN CONVENCIONAL -----<br>";
    randomNumConvencional();


    echo "<br>----- FUNCIÓN VARIABLE -----<br>";
    $juego();

    
    echo "<br>----- FUNCIÓN ANÓNIMA -----<br>";
    jugar($funcion_aleatoria); //callback
?>