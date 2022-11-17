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
        font-family: Arial, Helvetica, sans-serif;
    }
    form input{
        margin-top: 1em;
        width: 150px;
    }

</style>
<body>
<?php
session_start();
echo "Hola ". $_SESSION["nom"]."<br>Dale al botón";
if(isset($_POST["redireccionar"])){
    header("location: ./pagina3.php");
    
}
?>
    <form method="POST">
        <input type="submit" name="redireccionar">
    </form>
</body>
</html>
