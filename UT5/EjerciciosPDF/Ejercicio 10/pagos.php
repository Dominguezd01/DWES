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
    <form method="POST" id="formularioProductos">
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
    var_dump($_POST);
    var_dump($_COOKIE);
    if (!isset($_POST["enviar"])) {
        echo "Compra tus productos";
    }else{
        $producto = $_POST["producto"];
        $unidades = $_POST["numUds"];
        setcookie($producto, $unidades , time() + 360);
        var_dump($_COOKIE);
    }
?>