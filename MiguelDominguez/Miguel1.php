
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
    #color{
        background-color: blue;
    }
</style>
<body>
    <form method="POST" action="">
        <table border="1">
            <tr>
                <td colspan="3">
                <input type="text" name="aula" placeholder="Aula" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label>Ciclo</label>
                    <select name="modulo">
                    <option value="SMR">SMR</option>
                    <option value="DAW">DAW</option>
                    <option value="DAM">DAM</option>
                    <option value="ASIR">ASIR</option>
                    </select>
            </td>
            <td>
                <label>Curso:</label><br>
                <input type="radio" name = "curso" value ="Primero" required>Primero
                <input type="radio" name="curso" value="Segundo" required>Segundo
            </td>
            </tr>
            <tr id="color">
                <td colspan="3">
                <button id="boton" type="reset">Eliminar Datos</button>
                <input id="enviar" type="submit" name="submit">
                </td>
            </tr>
        </table><br>


    </form>
</body>
</html>
<?php
/*
Indice pagina
 */
require_once("./f_Miguel.php");
require_once("./clase_Miguel.php");
require_once("./datos_Miguel.inc");
    if(isset($_POST["submit"])){
        if(!empty($_POST["modulo"]) &&!empty($_POST["aula"])&& !empty($_POST["curso"])){
            if(validaAula($_POST["aula"]) == 2){
                echo "Introduce un valor numerico";
            }else if(validaAula($_POST["aula"]) == 1){
                echo "En el centro se imparten ".numLenguajes($arraylenguajes). " tecnologías<br>";
                $alumno1 = new Tecnologia($_POST["aula"],$_POST["modulo"],$_POST["curso"]);
               
                echo $alumno1 -> __toString()."<br>";
                echo "Tecnologia de desarrollo: ". tecnologiasModulo($arraylenguajes,$_POST["modulo"],$_POST["curso"]);
            }else if(validaAula($_POST["aula"]) == 0){
                echo "Error: El valor del aula no es correcto[11-14,25 o 34]";
                
            }
            
        }
    }
?>