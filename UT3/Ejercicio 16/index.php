<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nomUsuario">
        <input type="password" name="pass">
        <input type="submit" name="enviar">
    </form>
</body>
</html>

<?php
    session_start();
    if(isset($_POST["enviar"])){
        if($_POST["nomUsuario"] == "" ||$_POST["pass"] == ""){
            echo "Introduce valores";
        }else{
            $_SESSION["nom"] = $_POST["nomUsuario"];
            header("location: ./botonSeguir.php");
        }
    }
    


?>