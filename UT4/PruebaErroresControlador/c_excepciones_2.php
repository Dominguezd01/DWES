<?php
    ini_set("display_errors", "0");
    /*

    try{
        echo mktime()."<br>";  
        throw new Exception("En desuso");
    }catch(Exception $e){
        echo $e->getMessage();
        error_log("ERROR: ".$e->getMessage(). $e->getLine());
    }
    */
    
    class Warning extends Exception{

    }
    $codigos = ["Advertencia" =>10,
                "Aviso" => 5];
    try{
        $nombre = "Miguel";
        echo count($nombre)."<br>";
        throw new Warning("Error, esto es una advertencia",10);
    }catch(Warning $w){
        foreach($codigos as $clave => $valor){
            if($valor == 10){
               $claveMensaje = $clave;
            }
            echo $claveMensaje. ": ". $w->getMessage()." ".$w->getFile();
        }
    }

    set_exception_handler("miControladorDeExcepciones");
    function miControladorDeExcepciones ($e){
        switch(true){
            case ($e instanceof Exception):{

            }
            break;
            case ($e instanceof Warning):{
                
            }
            break;
            case ($e instanceof ErroresMios):{
                
            }
            break;

            default:
                echo "Excepcion no controlada";
        }
    }
    class ErroresMios extends Exception{
        function miMensaje(){
            return "<br>Error de mi codigo: ". parent::getMessage();
        }
    }

    try{
        $num = 5;
        throw new ErroresMios("No es posible tomar un valor menor de 10");
    }catch (ErroresMios $e){
        echo $e->miMensaje();
    }
?>