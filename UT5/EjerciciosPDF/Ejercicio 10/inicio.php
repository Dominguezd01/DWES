<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    :root{
        color-scheme: dark;
    }
    body{
        display: grid;
        place-items: center;
    } 
    tr, td{
        padding-right: 1em;
    }
    #botonPagar{
        background-color: #FE94C0;
        padding: 0.5em;
        text-decoration: none;
        color: white;
        border-radius: 10px;
        transition: 0.5s;
    }
    #botonPagar:hover{
        background-color: #F3D4E1;
        color: black;
        padding: 0.6em;
    }
</style>
<body>
    <table>
        <tr>
            <td>Platanos</td>
            <td>Manzanas</td>
            <td>Peras</td>
        </tr>
        <tr>
            <td>
                12
            </td>
            <td>
                15
            </td>
            <td>
                22
            </td>
        </tr>
        <tr>
            <td>
                1.80
            </td>
            <td>
                2.36
            </td>
            <td>
                4.20
            </td>
        </tr>
    </table><br>
    <a id="botonPagar"href="./comprar.php">Comprar ahora</a>
</body>
</html>
