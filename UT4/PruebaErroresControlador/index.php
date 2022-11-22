<?php
    set_error_handler("miControlador");

    $dividir =  5/0;
    $cadena = "a";
    restore_error_handler();
    if(!is_numeric($cadena)){
        trigger_error("No numerico",E_USER_NOTICE);
    }

    function miControlador ($nivel, $mensaje){
        switch($nivel){
            case E_WARNING: 
                $mensaje = "No se puede dividir por cero";
                echo "Error de tipo WARNING: $mensaje";
                break;
            case E_USER_NOTICE:
                echo "Error de tipo Notice, $mensaje";
                break;
            default:
                echo "Error no identificado";
                break;
        }
    }


?>