<?php
    if(isset($_POST['enviar'])){
        $dato = $_POST['dato'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" target="blank" method="POST">
        De que color es el cielo?
        <input type="text" name="color"/>
        <input type="submit" name="enviar"/>
    </form>
</body>
</html>