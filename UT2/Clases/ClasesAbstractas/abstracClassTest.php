<?php

    require_once("./Alumno.php");
    require_once("./Profesor.php");
    echo "----------","ALUMNO","----------<br>";
    $alumno1 = new Alumno("Luis", 15);

    var_dump($alumno1);

    echo $alumno1 -> competencia_digital(1),"<br>";
    echo $alumno1 -> calculo_trienios(2),"<br>";

    echo "----------","PROFESOR","----------<br>";
    $profesor1 = new Profesor("Jose", 35,"Interino");
    var_dump($profesor1);

    echo $profesor1 -> competencia_digital("informatica"),"<br>";
    echo $profesor1 -> calculo_trienios(45),"<br>";


?>