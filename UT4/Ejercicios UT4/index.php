<?php
    set_exception_handler("controlador");
    require_once("./miExcepcion.php");
    function controlador($e){
        switch(true){
            case ($e instanceof Exception):
               echo "Fuera de rango<br>";
               error_log($e -> getMessage(). " en la linea ". $e ->getLine());
               break;
        }
    }
    function checkEmail(){
        try{
            $email = "email2@email.com";
            if($email != "email@email.com"){
                throw new miExcepcion("Email no valido");
                
            }
        }catch(miExcepcion $e){
            echo $e ->getMessage()."<br>";        
            error_log($e -> getMessage(). " en la linea ". $e ->getLine());
        }
    }

    function recorrerArray(){
        $array = [1,3,4,6,7];
        for($i = 0; $i<=sizeof($array); $i++){
            if($i >=sizeof($array)){
                throw new Exception("Valor fuera de rango");
            }else{
                echo $array[$i]."<br>";
            }
        }
    }    

    
    checkEmail();
    recorrerArray();
?>
