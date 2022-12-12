
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
    
</head>
<body>
    <h1 style="text-align:center ;">Actividades</h1>
    <form style="text-align:center ;" action="" method="POST">
        <fieldset>
            <legend>
                <b>Seleccione la opción que le corresponda sobre el test</b>
            </legend>
            <input type="radio" id="Realizada1" name="test" value="1">
            <label for="Realizada1">Realizada</label><br>
            <input type="radio" id="No realizada1" name="test" value="0">
            <label for="No realizada1">No realizada</label><br>
        </fieldset>
        <fieldset>
            <legend>
                <b>Seleccione la opción que le corresponda sobre el examen</b>
            </legend>
            <input type="radio" id="Realizada2" name="examen" value="1">
            <label for="Realizada1">Realizada</label><br>
            <input type="radio" id="No realizada2" name="examen" value="0">
            <label for="No realizada2">No realizada</label><br>
        </fieldset>
        <input type = "submit" name="submit">
    </form>
</body>
</html>

<?php
/*Diseña una aplicación web que te permita sabe en todo momento qué pruebas ya has realizado en este módulo 
(para  simplificarlo,  será  suficiente  llevar  un control  sobre  un  test  y  un  examen)  
Cada  vez  que  accedas  ala aplicación  podrás  marcar  la  actividad  (realizada  o  no)
Si  están  todas  realizadas,mostrará  un  mensaje indicándolo.(utiliza dos cookies)
*/


if(isset($_POST["submit"])){
    if($_POST["test"] == 1){
        setcookie("test", "1", time()+300);
    }else{
        setcookie("test", "0", time()+300);
    }
    if($_POST["examen"] == 1){
        setcookie("examen", "1", time()+300);
    }else{
        setcookie("examen", "0", time()+300);
    }
    if(isset($_COOKIE["test"]) ||isset($_COOKIE["examen"]) ){
        if($_COOKIE["test"] == "1" && $_COOKIE["examen"] == "1"){
            header("location: ./completado.php");
        }
        if($_COOKIE["test"] != "1"){
            echo "Te falta el test por completar<br>";
        }
        if($_COOKIE["examen"] != "1"){
            echo "Te falta el examen por completar<br>";
        }
    }
}else{
    echo "Introduce los datos";
}



?>