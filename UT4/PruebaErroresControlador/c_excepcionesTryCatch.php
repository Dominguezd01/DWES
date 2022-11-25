<?php
declare(strict_types = 1);

try{
    function suma ($a, $b):int{
        $suma = $a + $b ;
        return $suma;
    }    
    echo "La suma es ". suma(2,3.1);
}catch(TypeError $e){
    echo "Algo fue mal ", $e->getMessage();
}


?>