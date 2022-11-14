<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['turno'])) {
        $turno = $_POST['turno'];
        if ($turno == 'D') {
            echo "El turno elegido es Diurno";
            exit();
        } else {
            echo "El turno elegido es Vespertino";
            exit();
        }
    } else {
        echo "Elige un turno.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <br>Turno:
<form action="" method="POST">
        <input type="radio" name="turno" value="D"/>Diurno
        <input type="radio" name="turno" value="V"/>Vespertino
        <input type="submit" name="enviar" value="OK">
