<?php

    function cubo ($valor):?int{
        if(is_null($valor)){
            return (NULL);
        }else{
            return ($valor **3);
        }
        
    }
    function suma (int $a, int $b){
        $r = $a + $b;
        return $r;
    }

    function resta (int $a, int $b){
        $r = $a - $b;
        return $r;
    }

    function multiplicar_a($a, &$t){
        $producto = 0;
        for($i =0;$i<=10;$i++){
            $producto = ($a*$i);
            $t .= $a .'X' .$i.'= '.$producto .'<br>';
        }
        return $t;
    }

    function calcular($operacion, $valor1, $valor2){
        $r = $operacion($valor1, $valor2);
        return $r;
    }

    function mostrar ($a, $b, $c){
        echo $a, $b, $c, "<br>";
    }
?>