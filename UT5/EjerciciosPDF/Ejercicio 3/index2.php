
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_COOKIE["prueba"])) {
        echo $_COOKIE["prueba"] . "<br>";
    } else {
        echo "No estoy activa";
    }
?>
</body>
</html>