<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    :root{
        color-scheme: dark;
    }
    body{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 5em;
        row-gap: 5em;
        place-content: center;
        background: rgb(74,73,73);
        background: linear-gradient(90deg, rgba(74,73,73,1) 0%, rgba(36,27,27,1) 66%);
    }
    #inputContainer{
        display: grid;
        grid-template-columns: repeat(2,1fr);
        gap: 1em;
    }
    form{
        display: grid;
        grid-template-columns: repeat(1, 2fr);
    }

    .alumno{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        display: grid;
        background: rgb(74,73,73);
        background: radial-gradient(circle, rgba(74,73,73,1) 0%, rgba(124,124,124,1) 66%);
        border-radius: 15px;
        padding: 1em;
        place-items: center;
    }
</style>
<body>
        <form action="" method="POST" id="form">
            <div id="inputContainer">
                <input type="text" placeholder="Nombre" name="nombre">
                <input type="number" placeholder="Id Alumno" name="idAl">
                <input type="number" placeholder="Id Curso" name="idCurso">
                <input type="number" placeholder="Edad" name="edad"><br>
            </div>
            <input type="submit" name="enviar">
        </form>

        <div id="alumnos">

        </div>
</body>

</html>
<?php

    $mysqli = new mysqli("localhost", "root", "", "ciclos", 3306);

    function sentenciaDB($mysqli){

        $mysqli->real_query("Select * from alumno");
        $sentencia = $mysqli->use_result();
        //var_dump($sentencia);
        foreach($sentencia as $fila){
            //var_dump($fila);
           mostrarUsuario($fila["nombre"], $fila["id_al"], $fila["id_curso"], $fila["edad"]);
        }
    }
    

    function mostrarUsuario($nombre, $idAl, $idCurso, $edad){
        echo "<div class='alumno'>
                <span> Nombre: $nombre</span>
                <span> Edad: $edad</span>
                <span> Id del alumno: $idAl</span>
                <span> Id del curso: $idCurso</span>
              </div>";
    }

    if(isset($_POST["enviar"])){insertarUsuario($mysqli);}

    function insertarUsuario($mysqli){
        $array = [
            "id_al" => intval($_POST["idAl"]),
            "nombre" => $_POST["nombre"],
            "edad" => intval($_POST["edad"]),
            "id_curso" => intval($_POST["idCurso"])
        ];

        $mysqli ->real_query("INSERT INTO alumno (id_al, nombre, edad, id_curso) VALUES ('$array[id_al]', '$array[nombre]', '$array[edad]', '$array[id_curso]');");
        sentenciaDB($mysqli);
 
        
    }

    sentenciaDB($mysqli);