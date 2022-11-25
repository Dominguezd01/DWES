<?php
    set_error_handler("miControlador");

    //$dividir =  5/0;
    $cadena = "a";
   set_error_handler("miControlador");
    if(!is_numeric($cadena)){
        trigger_error("Valor no numerico",E_USER_NOTICE);
    }
    CONST a = "Hola";
    CONST a = "ADIOS";
    function miControlador ($nivel, $mensaje){
        switch($nivel){
            case E_USER_NOTICE:
                echo "Error de tipo Notice, $mensaje<br>";
                break;
            case E_NOTICE:
                echo "Error de tipo Notice, $mensaje";
                break;
            default:
                echo "Error no identificado";
                break;
        }
    }


?>