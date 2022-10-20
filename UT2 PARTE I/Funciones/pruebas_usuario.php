<?php
/*
    declare(strict_types = 1); //Obliga a que los tipos coincidan
    require_once("./funciones.php");
    echo "El cubo es ",cubo(3), "<br>"; 
    echo "El cubo es ", cubo(NULL), "<br>";
    echo "La resta es ", resta(34,25), "<br>";
    echo multiplicar_a(5, $t);
    $operacion = "resta";
    echo calcular($operacion,10,20),"<br>";

    mostrar(3,6,7);

    producto($r, 2,3,4,5);

    echo "El resultado es: $r <br>";


*/
    $f_visualizar = function($frase_original){
        echo $frase_original,"<br>";
    };

    $f_sin_blancos = function(&$frase_original){
        $frase_aux = explode(" ", $frase_original);
        $frase_original = implode("", $frase_aux);
    };

    $frase = "Hola buenas tardes";

    $f_visualizar($frase);

    if(strpos($frase, " ")){
        $f_sin_blancos($frase);
        echo $frase;
    }
   
?>