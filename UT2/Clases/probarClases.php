<?php
    require_once("./AlumnoBecado.php");
    require_once("./Primero.php");
    require_once("./Segundo.php");
    echo "--------------CON CLASE ALUMNO---------------<br>";
    $ana = new Alumno("Manolo", 27,007,8,7);
    
    $ana -> edad = 16;

    $ana -> visualizar();
    echo "No tiene beca<br>";

    
    echo "--------------CON CLASE ALUMNO BECADO---------------<br>";
    // nombre, edad, numMatricula, importe
    $ana2 = new AlumnoBecado("Daniel", 27,05,23,5,6);

    $ana2 -> edad = 26;
    $ana2 -> importe = 1;

    $ana2 ->visualizarBecado();

    

  
    
    echo "--------------CON CLASE ALUMNO PRIMERO---------------<br>";
    //nombre,edad,matricula, $califFct,$califProy,$notaMediaSegundo
    $alumnoPrimero = new Primero("Pepe", 24, 4567,3);
    var_dump($alumnoPrimero);

    if($alumnoPrimero -> pasaCursoPrimero()){
        echo "EL ALUMNO SUPERA EL CURSO<br>";
    }else{
        echo "EL ALUMNO NO SUPERA EL CURSO<br>";
    }
    echo "--------------CON CLASE ALUMNO SEGUNDO---------------<br>";
    //nombre,edad,matricula, $notaMediaSegundo,$califFct,$califProy
    $alumnoPrimero2 = new Primero("Pepe", 24, 4567,8);
    $alumnoSegundo = new Segundo("Pepe", 24, 4567,6,true,true);
    var_dump($alumnoSegundo);
    if($alumnoSegundo -> pasaCursoSegundo($alumnoPrimero2 ->pasaCursoPrimero())){
        echo "EL ALUMNO SUPERA EL CURSO<br>";
    }else{
        echo "EL ALUMNO NO SUPERA EL CURSO<br>";
    }
?>