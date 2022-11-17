<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display: grid;
        justify-content: center;
        align-items: center;
    }
    form input{
        width: 100%;
        text-align: center;
    }
    #enviar{
        justify-content: center;
        align-items: center;
        width: 25%;
    }
    ::placeholder{text-align: center;}
</style>
<body>
    <h1>Credenciales de Usuario</h1>
    <form action="" method="post">
        <input placeholder="Nombre de usuario"type="text" name="nomUsuario"><br><br>
        <input placeholder="Contraseña" type="password" name="pass"><br><br>
        <input id="enviar" type="submit" name="enviar">
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