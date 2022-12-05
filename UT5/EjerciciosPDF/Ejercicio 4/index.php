<?php
//4. Implementar el control de visitas a una página utilizando una cookie sencilla.

    setcookie("visitas", 0, 1000);
    if(!isset($_COOKIE["visitas"])){
        setcookie("visitas", "1", time()+120);
    }else{
        $contador = (int)$_COOKIE["visitas"];
        $contador++;
        setcookie("visitas", $contador, time()+120);
        echo "Visita número ". $contador;
    }
    
?>