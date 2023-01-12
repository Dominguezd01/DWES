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
        grid-template-columns: repeat(3, 360px);
        gap: 1em;
        place-content: center;
    }
    span{
        text-align: center;
        background-color: white;
        color:black;
        border-radius: 15px;
    }
</style>
<body>
<form action="" method="POST" id="formInsertar">
            <div id="inputContainer">
                <input type="text" placeholder="Nombre" name="nombre">
                <input type="number" placeholder="Id Alumno" name="idAl">
                <input type="number" placeholder="Id Curso" name="idCurso">
                <input type="number" placeholder="Edad" name="edad"><br>
            </div>
            <input type="submit" name="enviarInsertar">
        </form>

</body>
</html>

<?php

    $db_host ="localhost";
    $db_usuario = "root";
    $clave = "";
    $db_name="ciclos";
    /*
    $conexion = mysqli_connect($db_host, $db_usuario, $clave);

    if(mysqli_connect_errno()){
        //echo "Fallo en la conexion";
        exit();
    }else{
        //echo "Conectado";
    }

    mysqli_select_db($conexion, $db_name);
    $consulta = "select * from alumno WHERE edad>=18 && edad<=21";
    $result = mysqli_query($conexion, $consulta);
    */
    $conexionConObjetos = new mysqli($db_host, $db_usuario,$clave, $db_name);
    if($conexionConObjetos->connect_errno){
        echo "Error";
    }
    $conexionConObjetos->real_query("select * from alumno");

    $result= $conexionConObjetos->use_result();
    //$results = $result;
    
    foreach($result as $fila){
        echo 
        "<span>".
            "<p>ID: $fila[id_al]</p>"."
            "."<p>Nombre: $fila[nombre]</p>"." 
            "."<p>Edad: $fila[edad]</p>".
            "<p>Id Curso: $fila[id_curso]</p>".
        "</span>";
    }


    if(isset($_POST["enviarInsertar"])){insertarUsuario($conexionConObjetos);}

    function insertarUsuario($mysqli){
        $array = [
            "id_al" => intval($_POST["idAl"]),
            "nombre" => $_POST["nombre"],
            "edad" => intval($_POST["edad"]),
            "id_curso" => intval($_POST["idCurso"])
        ];

        $mysqli ->real_query("INSERT INTO alumno (id_al, nombre, edad, id_curso) VALUES ('$array[id_al]', '$array[nombre]', '$array[edad]', '$array[id_curso]');");
       
        
    }

?>