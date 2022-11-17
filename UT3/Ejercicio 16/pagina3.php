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
    }
    #enviar{
       float: right;
    }
    #pannear{
        padding: 2em;
    }
</style>
<body>
<?php
    if(isset($_POST["enviar"])){
        if(isset($_POST["rol"])&&isset($_POST["permisos"])&&isset($_POST["opciones"])){
            echo "Los datos del usuario son:<br>";
            var_dump($_POST);
            exit();
        }else{
            echo "Selecciona todas las opciones";
        }
    }

?>
    <table border="1">
    <form action="" method="POST">
        <tr colspan ="4">
            <td id="pannear">
                <p style="text-align: center">Rol y caracteristicas</p>
                Rol: <input type="radio" name="rol" value ="administrador">Administrador
                <input type="radio" name="rol" value="usuario" id="">Usuario
            </td> 
        </tr>
        <tr>
            <td>
                <select name="opciones" id="controlOpciones">
                    <option value="Datos">Gestion Datos</option>
                    <option value="Info">Gestion Infromes</option>
                    <option value="Perms">Gestion Permisos</option>
                    <option value="S">Gestion Sanciones</option>
                </select>
            </td>
            <td>
                <input type="checkbox" name="permisos[]" value ="r">Lectura<br>
                <input type="checkbox" name="permisos[]" value="w">Escritura<br>
                <input type="checkbox" name="permisos[]" value="x">Ejecucion<br>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="reset">Borrar datos</button>
                <input id="enviar" name="enviar" type="submit">
            </td>
        </tr>
    </form>
    </table>

</body>
</html>

