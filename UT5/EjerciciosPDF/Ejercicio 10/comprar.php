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
    }
    #select{
        margin-right: 1em;
    }
    #submit{
        text-transform: capitalize;
        margin-right: 1em ;
    }
    .botones{
        background-color: #FE94C0;
        padding: 0.5em;
        border-radius: 5px;
        text-decoration: none;
        color:white;
        transition: 0.5s;
        margin-right: 1em;
    }
    .botones:hover{
        background-color: #F3D4E1;
        color: black;
        padding: 0.6em;
    }
</style>
<body>
    <form method="POST" id="formularioProductos" action="">
            <input type="radio" name="producto" value="Platanos" required>Platanos<br>
            <input type="radio" name="producto" value="Manzanas" required>Manzanas<br>
            <input type="radio" name="producto" value="Peras" required>Peras<br><br>
        <label>Unidades</label>
        <input type="number" id="numeroUds" name="numUds"><br><br>
        <input type="submit" name="enviar" value="Añadir al Carrito" id="submit">
        <a href="./pagar.php" class="botones">Pagar</a>
        <a href="./salir.php" class="botones">Salir</a><br>
    </form><br>
    
</body>
</html>
<?php
    session_start();
    mostrarCarrito();
    $arrayProductos =[
        "Platanos" => 12,
        "Manzanas" => 15, 
        "Peras" => 22
    ];

    if (!isset($_POST["enviar"])) {
        echo "Compra tus productos";
    }else{
        $producto = $_POST["producto"];
        $unidades = $_POST["numUds"];
        
        if($arrayProductos[$producto] < $unidades){
            echo "Solo hay disponibles ". "$arrayProductos[$producto] unidades";
        }else{
            crearCarrito($producto, $unidades); 
        }

        //mostrarCarrito($producto, $unidades);
       
    }

    function crearCarrito($producto, $uds){
        if(!isset($_COOKIE[$producto])){
            setcookie($producto, $uds, time()+360);
        }else{
            setcookie($producto, $_COOKIE[$producto] +$uds, time()+360);
        }
        header("location: ./comprar.php");
        
    }


    function mostrarCarrito(){
        $clavesArray = array_keys($_COOKIE);
        foreach($clavesArray as $item){
            if($item != "PHPSESSID"){
                echo "<span>".$item.": ".$_COOKIE[$item]."</span><br>";
            }
        }   
    }

?>