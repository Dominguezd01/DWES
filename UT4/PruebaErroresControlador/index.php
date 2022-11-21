<?php
    set_error_handler("miControlador");

    $dividir =  5/0;

    restore_error_handler();

    function miControlador ($nivel, $mensaje){
        switch($nivel){
            case E_WARNING: 
                $mensaje = "No se puede dividir por cero";
                echo "Error de tipo WARNING: $mensaje";
                break;
            default:
                echo "Error no identificado";
                break;
        }
    }


?>