
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Credenciales</h1>
    <form id="form" action="" method="POST">
       <input placeholder="Usuario" type="text" name="usuario[nombre]"><br><br>
        <input placeholder="Contraseña" type="password" name="usuario[clave]"><br><br>
        <input type ="submit" name="enviar">
    </form>
</body>
</html>
<?php
function comprobar(){
    if(isset($_POST['enviar'])){
    if(!empty($_POST['usuario']['nombre'] && !empty($_POST['usuario']['clave']))){
        if($_POST['usuario']['nombre']  == "admin" &&$_POST['usuario']['clave']=="mjuan"){
            return "<br>Hola bom dia, Manolo";
            exit();
        }else{
            return "<br>not manolo";
        }
    }else{
        return "<br>Introduce algo";
    }
    }
}

echo comprobar();
?>