<?php
//funcion validacion
function valida_dato()
{
    return preg_match("/^[a-z]{3,}/i", $_POST['color']);
}
$ErrorDato = "";
if (isset($_POST['enviar'])) {
    if (!empty($_POST['color'])){
        if (valida_dato()){
            if($_POST['color'] == "blanco"){
                echo "Acertaste";
                exit("<br>Fin de la app");
            }else{
                echo "Fallaste";
            }
        }else {
            $ErrorDato = "Error. El dato no es un string";
            echo $ErrorDato;
        } 
    }else{
        echo "No has enviado nada";
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
    <form  method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        De que color es el cielo?
        <input type="text" name="color"/>
        <input type="submit" name="enviar"/>
    </form>
    <p></p>

</body>
</html>
