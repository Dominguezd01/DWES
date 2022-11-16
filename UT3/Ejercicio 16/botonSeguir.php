<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="submit" name="redireccionar">
    </form>
</body>
</html>
<?php
session_start();
echo "Hola ". $_SESSION["nom"];
if(isset($_POST["redireccionar"])){
    header("location: ./pagina3.php");
    
}else{
    echo "Dale al boton";
}
?>