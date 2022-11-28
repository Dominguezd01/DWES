<?php
    ini_set("display_errors", "0");
    /*

    try{
      
    }catch(Exception $e){
        echo $e->getMessage();
        error_log("ERROR: ".$e->getMessage(). $e->getLine());
    }
    */
    
    set_exception_handler("miControladorDeExcepciones");
    function miControladorDeExcepciones ($e){
        switch(true){
            case ($e instanceof Exception):{
                echo $e -> getMessage();
                error_log($e->getMessage());
                break;
            }

            case ($e instanceof Warning):{
                echo $e -> getMessage();
                error_log($e->getMessage());
                break;
            }
            break;
            case ($e instanceof ErroresMios):{
                echo $e -> getMessage();
                error_log($e->getMessage());
                break;
            }
            default:
                echo "Excepcion no controlada";
        }
    }

    class Warning extends Exception{}
    
    class ErroresMios extends Exception{
        function miMensaje(){
            return "<br>Error de mi codigo: ". parent::getMessage();
        }
    }

    $codigos = ["Advertencia" =>10,
                "Aviso" => 5];

    echo mktime()."<br>";  
    throw new Exception("En desuso");
    
        $nombre = "Miguel";
        echo count($nombre)."<br>";
        throw new Warning("Error, esto es una advertencia<br>",10);
    



        $num = 5;
        throw new ErroresMios("No es posible tomar un valor menor de 10");
    
?>