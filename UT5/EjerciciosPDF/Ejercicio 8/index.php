<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="userName" placeholder="Usuario"><br><br>
        <input type="password" name="pass" id="" placeholder="Contraseña"><br><br>
        <input type="submit" name="enviar">    
    </form>
</body>
</html>
<?php
require_once("./Usuario.php");
/*
Serialización de los datos. Diseña la clase Usuario cuyos atributos serán nombre y contraseña y cuyos métodos únicamente 
su  constructor  y  recuperador  de  atributos  (__construct  y  __get,  métodos  mágicos).
Diseña  un pequeño formulario para un login y almaceda los datos en el objeto. Si el usuario es “admin” y la contraseña“mjuan”  mostrar el mensaje de
“Bienvenido” yla  próxima  vez  que  acceda  a  la  aplicación  mostrar  el  mensaje “Usuario correcto”. Nombre_usuario.
“Usted ya se logeó exitósamente en otro momento”. Si el usuario no es el indicado, mostrar el mensaje “Acceso denegado”.
*/

if(isset($_POST["enviar"])){
    $usuario = new Usuario($_POST["userName"], $_POST["pass"]);
    $usuario =unserialize($_COOKIE["login"]);
    $usuario -> serialize();
    setcookie("login", $usuario, time()+25);

}
if(isset($_COOKIE["usuario"]) || isset($_COOKIE["usuario"])){
    if($_COOKIE["usuario"] == "admin" && $_COOKIE["pass"] == "mjuan"){
        echo "Acceso correcto";
        exit;
    }else{
        echo "Credenciales no validas";
    }
}
?>

