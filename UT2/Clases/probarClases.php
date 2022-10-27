<?php
    require_once("./AlumnoBecado.php");
    echo "--------------CON CLASE ALUMNO---------------<br>";
    $ana = new Alumno("Manolo", 27,007,25);
    
    echo $ana -> nom,"<br>";
    echo $ana -> edad,"<br>";


    $ana -> edad = 16;

    echo $ana ;
    echo "El numero de la matricula es: ", $ana -> numMatricula, "<br>";
    echo  "El importe de la matricula es: ",$ana ->importeMatricula(),"<br>";
    $ana -> visualizar();
    
    
    echo "--------------CON CLASE ALUMNO BECADO---------------<br>";
    $ana2 = new AlumnoBecado("Daniel", 27,007,25);
    
    echo $ana2 -> nom,"<br>";
    echo $ana2 -> edad,"<br>";


    $ana2 -> edad = 16;

    echo $ana2 ;
    echo "El numero de la matricula es: ", $ana -> numMatricula, "<br>";
    echo  "El importe de la matricula es: ",$ana ->importeMatricula(),"<br>";


    $ana2 ->visualizarBecado();



?>