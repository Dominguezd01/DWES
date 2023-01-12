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
        display: flex;
        flex-wrap: wrap;
        flex-flow: column wrap;
        column-gap: 5em;
        row-gap: 5em;
        place-content: center;
        background: rgb(74,73,73);
        background: linear-gradient(90deg, rgba(74,73,73,1) 0%, rgba(36,27,27,1) 66%);
    }
    form{
        display: flex;
        margin-bottom: 1em;
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
            <input type="text" placeholder="Nacionalidad" name="nacionalidad">

            <input type="submit" name="enviar">
        </form>

        <div id="alumnos">

        </div>
</body>

</html>
<?php

    $mysqli = new mysqli("localhost", "root", "", "peliculas", 3306);

    
    
    function sentenciaDB($mysqli){
        $mysqli->real_query("Select * from alumno");
        $sentencia = $mysqli->use_result();
        var_dump($sentencia);
        foreach($sentencia as $fila){
            var_dump($fila);
            mostrarUsuario($fila["nombre"], $fila["id_al"], $fila["id_curso"], $fila["edad"]);
        }
    }
    

    function mostrarUsuario($idActor, $nombre, $nacionalidad, $sexo){
        $sexoCompleto ="";
        if($sexo == "m"){
            $sexoCompleto ="Masculino";
            
        }
        if($sexo == "f"){
            $sexoCompleto="Femenino";
        }
        
        echo "<div class='alumno'>
                <span> ID actor:$idActor</span>
                <span> Nombre:$nombre</span>
                <span> Nacionalidad:$nacionalidad</span>
                <span> Sexo:$sexoCompleto</span>
              </div>";
    }

    if(isset($_POST["enviar"])){insertarUsuario($mysqli);}

    function insertarUsuario($mysqli){


        $mysqli ->real_query("SELECT * FROM ACTOR WHERE nacionalidad= '$_POST[nacionalidad]'");
        $sentencia = $mysqli->use_result();
        //var_dump($sentencia);
        foreach($sentencia as $fila){
            //var_dump($fila);
            mostrarUsuario($fila["nacionalidad"], $fila["nombre_apellidos"], $fila["nacionalidad"], $fila["sexo"]);
        }
        
        
    }

    //sentenciaDB($mysqli);