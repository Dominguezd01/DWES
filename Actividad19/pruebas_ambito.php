<?php
    include_once("./funciones_ambito.php");
    $var1= 1;
    ambito1();

    ambito2();

    ambito3();

    $var1++;
    ambito3();

    ambito4();


    echo "Pasando ambito5(): ", ambito5($var1), "<br>";

    ambito6();
    echo "Pasando por ambito6(): $var2","<br>";

    const VALOR =4;
    echo "Pasando por el ambito8(): ", ambito8();

    
?>