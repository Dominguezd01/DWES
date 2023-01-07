<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    :root{
        color-scheme: dark;
    }
    body{
        display: grid;
        place-items: center;
        gap: 1px;
    }
</style>
<body>
    
</body>
</html>
<?php
    session_start();
    $arrayPrecios =[
        "Platanos" => 1.80,
        "Manzanas" => 2.36, 
        "Peras" => 4.20
    ];
    function mostrarCarrito(){
        $clavesArray = array_keys($_COOKIE);
        foreach($clavesArray as $item){
            if($item != "PHPSESSID"){
                echo "<span>".$item.": ".$_COOKIE[$item]."</span><br>";
            }
        }   
    }
    
    function calcularCarrito($arrayPrecios){
        $clavesArray = array_keys($_COOKIE);
        $sumaCarrito = 0;
        foreach($clavesArray as $item){
            if($item != "PHPSESSID"){
                $sumaCarrito += $_COOKIE[$item]* $arrayPrecios[$item];
            }
        }   
        echo  "<span>".$sumaCarrito. "€"."</span><br>";
    }

    mostrarCarrito();
    echo "<br>-------TOTAL-------<br>";
    calcularCarrito($arrayPrecios);
    include_once("./borrarcookie.php");


?>