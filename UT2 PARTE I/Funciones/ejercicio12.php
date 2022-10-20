<?php 

    function numInvertido($num){
        if($num<99 || $num>999){
            echo "EL NUMERO INTRODUCIDO NO ES VÁLIDO";
        }else{
            $invertido = strrev($num);
            return $invertido;
        }
    }

    function visualizarNum($num){
        echo  "El numero sin invertir es: ",$num,"<br>";
        echo  "El numero invertido es: ",numInvertido($num);
    }

    visualizarNum(256);
?>