<?php
    if(isset($_POST['color'])){
        if($_POST['color'] == "blanco"){
            echo "Enhorabuena";
            exit("<br>Fin de la app");
            //se podria añadir un <a href=""

        }else{
            echo "Intentalo de nuevo";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <form  method="POST">
        De que color es el cielo?
        <input type="text" name="color"/>
        <input type="submit" name="enviar"/>
    </form>
    <p></p>

</body>
</html>