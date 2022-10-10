<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $numeros = [2,4,5,1,3];
/*
    if(in_array("3",$numeros, TRUE )){ //TRUE --> Tiene que coincidir valor y tipo
        echo "Valor encontrado";
    }else{
        echo "Valor no encontrado";
    }
*/

    sort($numeros);
    for($i = 0; $i<count($numeros); $i++){
        echo "$numeros[$i] ";
    }
    echo "<br>";
    rsort($numeros);
    for($i = 0; $i<count($numeros); $i++){
        echo "$numeros[$i] ";
    }
?>
</body>
</html>