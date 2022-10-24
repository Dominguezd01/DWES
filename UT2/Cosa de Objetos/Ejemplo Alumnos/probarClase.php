<?php
    require("./Alumno.php");


    $alumno = new Alumno();

    $alumno -> constructAlumno("Jose", 19);
    var_dump($alumno);

?>