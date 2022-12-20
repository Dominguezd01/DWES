<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #select{
        margin-right: 1em;
    }
    #submit{
        text-transform: capitalize;
    }
</style>
<body>
    <form method="POST" id="formularioProductos" action="">
            <input type="radio" name="producto" value="Platanos">Platanos<br>
            <input type="radio" name="producto" value="Manzanas">Manzanas<br>
            <input type="radio" name="producto" value="Peras">Peras<br><br>
        <label>Unidades</label>
        <input type="number" id="numeroUds" name="numUds"><br><br>
        <input type="submit" name="enviar" value="enviar" id="submit">
    </form>
</body>
</html>
<?php
    session_start();
    echo "--- ESTO ES EL POST ---";
    var_dump($_COOKIE);
    $arrayProductos = ["Platanos" =>0,
                        "Manzanas" =>0,
                        "Peras" => 0];

    if (!isset($_POST["enviar"])) {
        echo "Compra tus productos";
    }else{
        $producto = $_POST["producto"];
        $unidades = $_POST["numUds"];
        

        //mostrarCarrito($producto, $unidades);
        crearCarrito($producto, $unidades);
    }

    function crearCarrito($producto, $uds){
        if(!isset($_COOKIE[$producto])){
            //echo "No esta creado";
            setcookie($producto, $uds, time()+360);
        }else{
            setcookie($producto, $_COOKIE[$producto] +$uds, time()+360);
        }
        echo"--ESTO ES EL ARRAY DE PRODUCTOS--<br>";
        //echo $arrayProductos[$producto];
        var_dump($_COOKIE);
        header("location: ./pagos.php");
    }

    function mostrarCarrito(){
        echo 
        <table>
            <tr>Platanos<tr>
        </table> 
    }
    //var_dump($arrayProductos);
?>