<?php
    declare(strict_types = 1);
    set_exception_handler("errorHandeler");
    function errorHandeler (TypeError $e){
        echo "Algo no fue bien ", $e->getMessage(); 
        error_log($e -> getMessage());
    }
    function suma ($a, $b):int{
        $suma = $a + $b ;
        return $suma;
    }    
    echo "La suma es ". suma(2,3.1);

?>