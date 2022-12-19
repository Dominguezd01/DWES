<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display: grid;
        place-items: center;
    }
    table, td, tr{
        border: black solid 2px;
    }
    #botonPagar{
        background-color: #d6b2b2;
        padding: 0.5em;
        text-decoration: none;
        color: black;
        border-radius: 10px;
        transition: 0.5s;
    }
    #botonPagar:hover{
        color:white;
        background-color: #cf8c8c;
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
    <a id="botonPagar"href="./pagos.php">Pagar ahora</a>
</body>
</html>
